<?php

namespace App\Controller;


use App\Service\TaxModelService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ModelController extends AbstractController
{
    /**
     * @Route("/model", name="app_model")
     */  
    public function index(TaxModelService $taxModelService): Response
    {
        

        

        $genericModel = $taxModelService->extractText();

        return $this->render('model/index.html.twig', [
            'controller_name' => 'ModelController',
        ]);
    }
}


//Es la puerta de enlace, decide que hacer y como emitir la respueta. Llama al servicio