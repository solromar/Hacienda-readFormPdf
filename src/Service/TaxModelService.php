<?php

namespace App\Service;

use App\Entity\Model111;
use App\Entity\Model303;
use App\Entity\Model347;
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

    //--------------------------------------------------------------------------------------Clasificar los PDF segun su modelo
    public function classify($pdfTexts)
{
    $dataByModel = []; // Arreglo para almacenar los datos de cada modelo

    foreach ($pdfTexts as $pdfFile) {
        // Leer el contenido del archivo PDF
        $pdfData = $this->pdfToText($pdfFile);
        // Buscar la palabra "modelo" en el contenido del PDF
        $matches = [];
        preg_match('/modelo\s+(\w{3})/i', $pdfData, $matches);

        if (isset($matches[1])) {
            $taxName = $matches[1];

            // Crear una nueva entidad TaxModel y asignar el valor encontrado
            $taxModel = new TaxModel();
            $taxModel->setTaxName($taxName);

            $genericModel = null;

            if ($taxName == '111') {
                $genericModel = new Model111();
            } elseif ($taxName == '303') {
                $genericModel = new Model303();
            } elseif ($taxName == '347') {
                $genericModel = new Model347();
            }

            // Extraer los datos específicos del modelo y asignarlos al objeto $genericModel
            $this->extractText($genericModel, $pdfData);

            // Agregar los datos capturados al arreglo $dataByModel, indexado por el nombre del modelo
            $dataByModel[$taxName][] = $genericModel;
            
        }
    }

    return $dataByModel;
}



    // ------------------------------------------------------------------Función para convertir un archivo PDF a texto
    public function pdfToText($pdfFolderPath)
    {
        $pdf = new Pdf();
        $text = $pdf->getText($pdfFolderPath);
        // Asegurar que el contenido esté en UTF-8
        $text = mb_convert_encoding($text, 'UTF-8', 'auto');

        return $text;
    }
}
