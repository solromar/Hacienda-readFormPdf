<?php

namespace App\Controller;

use Spatie\PdfToText\Pdf;
use App\Service\ModelService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class PruebaController extends AbstractController
{
    /**
     * @Route("/prueba", name="app_prueba")
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

        dd($pdfDirectory);

        $genericModel = $modelService->classify($pdfFiles);
        

        return $this->render('prueba/index.html.twig', [
            'controller_name' => 'PruebaController',
        ]);
    }
}
