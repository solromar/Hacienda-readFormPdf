<?php

namespace App\Service;

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
            $pdfData = file_get_contents($pdfFile);
            $pdfData = $this->pdfToText($pdfFile);

            

            // Almacenar la información en el arreglo $pdfTexts
            $pdfTexts[] = $pdfData;
        }
        // Convertir el contenido del PDF a UTF-8
        array_walk_recursive($pdfTexts, function (&$value) {
            $value = mb_convert_encoding($value, 'UTF-8', 'auto');
        });

        // Convertir el arreglo a JSON con formato legible
        $jsonContent = json_encode($pdfTexts, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        // Devolver el contenido JSON como una Response
        return new Response($jsonContent, 200, [
            'Content-Type' => 'application/json; charset=UTF-8'
        ]);
    }


    // Función para convertir un archivo PDF a texto
    public function pdfToText($pdfFolderPath)
    {
        $pdf = new Pdf();
        $text = $pdf->getText($pdfFolderPath);
        // Asegurar que el contenido esté en UTF-8
        $text = mb_convert_encoding($text, 'UTF-8', 'auto');

        return $text;
    }
}
