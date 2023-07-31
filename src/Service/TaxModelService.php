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
            $pdfData = $this->pdfToText($pdfFile);          
            

            //if (is_array($pdfData)) {
                // Convertir el arreglo a una cadena de texto separada por saltos de línea
               // $pdfData = implode("\n", $pdfData);
            //}

            // Agregar el contenido del PDF al arreglo $pdfTexts
            $pdfTexts[] = $pdfData;
        }

        // Convertir el contenido de los PDF a UTF-8
        array_walk_recursive($pdfTexts, function (&$value) {
            $value = mb_convert_encoding($value, 'UTF-8', 'auto');
        });

        // Unir los textos de los PDF en una sola cadena de texto, separados por saltos de línea
        $combinedText = implode("\n", $pdfTexts);

        // Devolver el contenido de los archivos PDF como texto plano
        return new Response($combinedText, 200, [
            'Content-Type' => 'text/plain; charset=UTF-8'
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
       

        return $text;
    }
}
