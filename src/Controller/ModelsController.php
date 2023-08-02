<?php

namespace App\Controller;

use App\Service\FormRecognizerService;
use App\Service\TaxModelService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ModelsController extends AbstractController
{
    /**
     * @Route("/models", name="app_models")
     */
    private $taxModelService;
    private $formRecognizerService;

    public function __construct(TaxModelService $taxModelService, FormRecognizerService $formRecognizerService)
    {
        $this->taxModelService = $taxModelService;
        $this->formRecognizerService = $formRecognizerService;
    }

    /**
     * @Route("/models", name="app_models")
     */
    public function analyzePdfAction()
    {
        // Obtener los datos clasificados por modelo utilizando el servicio TaxModelService
        $dataByModel = $this->taxModelService->classify();
    
        // Procesar cada modelo y llamar a la API con los archivos PDF correspondientes
        $results = [];
        $pdfFolderPath = $this->getParameter('kernel.project_dir') . '/public/files/';
    
        foreach ($dataByModel as $model) {
            // Obtener la lista de archivos PDF en la carpeta public/files con el mismo modelo
            $pdfFiles = glob($pdfFolderPath . '*' . $model . '*.[pP][dD][fF]');   
    
            // Realizar el análisis para cada archivo PDF con el modelo correspondiente
            foreach ($pdfFiles as $pdfFile) {
                $resultId = $this->formRecognizerService->analyzeDocumentAction($model, $pdfFile);
                $result = $this->formRecognizerService->getResultByRequestId($model, $resultId);
                $results[] = [
                    'model' => $model,
                    'result' => $result,
                ];
            }
        }
    
        // Mostrar los resultados en formato JSON
        return $this->json($results, 200, [], [
            'json_encode_options' => JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        ]);
    }
}


