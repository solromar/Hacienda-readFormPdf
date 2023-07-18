MODEL CONTROLLER


<?php

namespace App\Controller;

use App\Service\ModelService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ModelController extends AbstractController
{
    /**
     * @Route("/model", name="app_model")
     */         
    private $parameterBag;
    
    public function __construct(ParameterBagInterface $parameterBag)
    {
        $this->parameterBag = $parameterBag;
    }
    public function index(ModelService $modelService): Response
    {
        $pdfDirectory = $this->parameterBag->get('kernel.project_dir') . '/public/files/';
        $pdfFiles = glob($pdfDirectory . '*.pdf');

        

        $genericModel = $modelService->classify($pdfFiles);

        return $this->render('model/index.html.twig', [
            'controller_name' => 'ModelController',
        ]);
    }
}


//Es la puerta de enlace, decide que hacer y como emitir la respueta. Llama al servicio