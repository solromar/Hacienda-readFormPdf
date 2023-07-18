MODEL SERVICE





<?php

namespace App\Service;

use App\Entity\Model030;
use App\Entity\Model036;
use App\Entity\Model111;
use App\Entity\TaxModel;
use Spatie\PdfToText\Pdf;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ModelService
{
    //private $parameterBag; Declarada pero NO usada asi que el private lo puse en la fc, aunque en el controller si queda bien

    public function __construct(private ParameterBagInterface $parameterBag)
    {
        $this->parameterBag = $parameterBag;
    }



    public function processPDFFiles()
    {
    }

    //Clasificar los PDF segun su modelo
    public function classify($pdfFiles)
    {
        foreach ($pdfFiles as $pdfFile) {
            $pdfText = Pdf::getText($pdfFile);
            $pdfCode = $this->extractPdfCode($pdfText);
            

            $genericModel = null;

            if ($pdfCode == 111) {
                $genericModel = new Model111();
            }

            if ($pdfCode == 300) {
                $genericModel = new Model030();
            }

            if ($pdfCode == 720) {
                $genericModel = new Model036();
            }

            $this->processPDFFiles($genericModel, $pdfText);
            //$this->getDoctrine()->getEntityManager()->persist($genericModel);
            //$this->getDoctrine()->getEntityManager()->flush();
        }

        return $genericModel;
    }


    public function extractPdfCode(string $pdfText) 
    {
        // aca vendria de $taxName de la entidad taxModel????
    }
}


//Establece la logica de la app, llama a otros servicios y repositorios