<?php

namespace App\Service;

use App\Entity\Model030;
use App\Entity\Model036;
use App\Entity\Model111;
use Spatie\PdfToText\Pdf;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ModelService
{
    private $container;

    public function __construct(ParameterBagInterface $container)
    {
        $this->container = $container;
    }

    public function processPDFFiles()
    {
    }

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
