<?php

namespace App\Service;


use App\Entity\Model030;
use App\Entity\Model036;
use App\Entity\Model111;
use Spatie\PdfToText\Pdf;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ModelService
{
    
    public function processFile($filePath, $fileName)
    {
        // Crea un arreglo vacío para almacenar el texto de cada archivo PDF
        $textosDePdfs = [];
        $pdfRoute = $filePath . $fileName;

        //pdfToText para extraer el texto y almacenarlo en []
        $textoDelPdf = $this->pdfToText($pdfRoute);
        $textosDePdfs[] = $textoDelPdf;
        //$entityManager = $this->getDoctrine()->getManager();

        // Obtiene el tipo de archivo
        $fileNameParts = explode('_', $fileName);
        $modelType = $fileNameParts[0]; 

        $fileNameParts = null;

        if ($modelType == 030) {
            $fileNameParts = new Model030();
        }
        if ($modelType == 036) {
            $fileNameParts = new Model036();
        }
        if ($modelType == 111) {
            $fileNameParts = new Model111();
        }
        return $fileNameParts;


    }

    public function pdfToText($filePath)
    {
        $pdf = new Pdf();
        $text = (new Pdf())
            ->setPdf(($filePath), $pdf)->text();

        return $text;
    }



    
}

//Establece la logica de la app, llama a otros servicios y repositorios