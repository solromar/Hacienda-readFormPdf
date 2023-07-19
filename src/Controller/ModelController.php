<?php

namespace App\Controller;


use Spatie\PdfToText\Pdf;
use App\Service\TaxModelService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ModelController extends AbstractController
{
    /**
     * @Route("/model", name="app_model")
     */
    public function showModelData(TaxModelService $taxModelService)
    {
        // Carpeta donde se encuentran los PDF (si no las proporcionaste desde el controlador)
        $pdfFolderPath = $this->getParameter('kernel.project_dir') . '/public/files/';
        $pdfFiles = glob($pdfFolderPath . '/*.[pP][dD][fF]');

        // Obtener los datos clasificados por modelo utilizando el servicio TaxModelService
        $dataByModel = $taxModelService->classify($pdfFiles);

        // Mostrar los datos capturados por modelo en formato JSON
        return new Response(json_encode($dataByModel, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), 200, [
            'Content-Type' => 'application/json; charset=UTF-8'
        ]);
    }
}


//Es la puerta de enlace, decide que hacer y como emitir la respueta. Llama al servicio