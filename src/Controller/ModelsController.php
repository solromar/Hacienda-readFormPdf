<?php

namespace App\Controller;

use App\Service\FormRecognizerService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ModelsController extends AbstractController
{
    /**
     * @Route("/models", name="app_models")
     */
    public function someAction(FormRecognizerService $formRecognizerService)
    {
        // Obtén el valor de apim-request-id desde la solicitud POST
        $apimRequestId = $formRecognizerService->analyzeDocumentAction();

        // Usa el valor para obtener el resultado con la solicitud GET
        $result = $formRecognizerService->getResultByRequestId($apimRequestId);

        return $this->json($result, 200, [], [
            'json_encode_options' => JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        ]);
    }
}
