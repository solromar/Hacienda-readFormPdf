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
    public function mostrarPdfs(TaxModelService $taxModelService)
    {
        // Utiliza el servicio para extraer el texto de los archivos PDF
        return $taxModelService->extractText();

        
        
    }
}


//Es la puerta de enlace, decide que hacer y como emitir la respueta. Llama al servicio