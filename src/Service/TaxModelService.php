<?php

namespace App\Service;

use App\Entity\Model111;
use App\Entity\Model115;
use App\Entity\Model190;
use App\Entity\Model200;
use App\Entity\Model303;
use App\Entity\Model347;
use App\Entity\Model390;
use App\Entity\TaxModel;
use Spatie\PdfToText\Pdf;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;


class TaxModelService
{
    private $parameterBag;
    public function __construct(ParameterBagInterface $parameterBag)
    {
        $this->parameterBag = $parameterBag;
    }
    // ---------------------------------------------------------------------------------------------------------------
    public function extractText()
    {
        // Carpeta donde se encuentran los PDF
        $pdfFolderPath = $this->parameterBag->get('kernel.project_dir') . '/public/files/';

        // Obtener la lista de archivos PDF en la carpeta
        $pdfFiles = glob($pdfFolderPath . '/*.[pP][dD][fF]');

        $pdfTexts = []; //arreglo vacio para almacenar los textos

        // Recorrer los archivos PDF
        foreach ($pdfFiles as $pdfFile) {
            // Leer el contenido del archivo PDF
            $pdfData = $this->pdfToText($pdfFile);    
        
            // Agregar el contenido del PDF al arreglo $pdfTexts
            $pdfTexts[] = $pdfData;
        }      
        // Devolver el contenido de los archivos PDF como texto plano
        return new Response($pdfData, 200, [
            'Content-Type' => 'text/plain; charset=UTF-8'
        ]);
    }  
    //--------------------------------------------------------------------------------------Clasificar los PDF segun su modelo
    public function classify()
    {
        // Carpeta donde se encuentran los PDF
        $pdfFolderPath = $this->parameterBag->get('kernel.project_dir') . '/public/files/';
        // Obtener la lista de archivos PDF en la carpeta
        $pdfFiles = glob($pdfFolderPath . '/*.[pP][dD][fF]');        
        $dataByModel = []; // Arreglo para almacenar los datos de cada modelo

        foreach ($pdfFiles as $pdfFile) {
            // Leer el contenido del archivo PDF
            $pdfData = $this->pdfToText($pdfFile);
            // Buscar la palabra "modelo" en el contenido del PDF
            $matches = [];
            preg_match('/modelo\s+(\w{3})/i', $pdfData, $matches);

            if (isset($matches[1])) {
                $taxValue = trim($matches[1]); // Limpiar espacios en blanco alrededor del valor si es necesario
    
                // Agregar el valor capturado al arreglo $dataByModel
                $dataByModel[] = $taxValue;
               
            }
        }
        return $dataByModel;
    }
    // ------------------------------------------------------------------Función para convertir un archivo PDF a texto
    public function pdfToText($pdfFolderPath)
    {
        $pdf = new Pdf();
        $text = $pdf->getText($pdfFolderPath);       

        return $text;
    }
}
