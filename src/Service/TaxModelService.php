<?php

namespace App\Service;

use Spatie\PdfToText\Pdf;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;


class TaxModelService
{
    private $parameterBag;
    public function __construct(ParameterBagInterface $parameterBag)
    {
        $this->parameterBag = $parameterBag;
    }

    public function extractText()
    {
        // Carpeta donde se encuentran los PDF
        $pdfFolderPath = $this->parameterBag->get('kernel.project_dir') . '/public/files/';

        // Obtener la lista de archivos PDF en la carpeta
        $pdfFiles = glob($pdfFolderPath . '/*.pdf');

        // Recorrer los archivos PDF
        foreach ($pdfFiles as $pdfFile) {
            // Leer el contenido del archivo PDF
            $pdfData = file_get_contents($pdfFile);
            
        }

                
        $this->processFile($pdfData, $pdfFile);
    }

    public function processFile($pdfFolderPath, $pdfFile)
    {
        
        // Crea un arreglo vacío para almacenar el texto de cada archivo PDF
        $pdfFiles = [];
        $pdfRoute = $pdfFolderPath . $pdfFile;
        dd($pdfFiles);
        //pdfToText para extraer el texto y almacenarlo en []
        $pdfFile = Pdf::getText($pdfRoute);
        $pdfFiles[] = $pdfFile;
    }
    // Función para convertir un archivo PDF a texto
    public function pdfToText($filePath)
    {
        $pdf = new Pdf();
        $text = (new Pdf())
            ->setPdf(($filePath), $pdf)->text();

        return $text;
    }
}
