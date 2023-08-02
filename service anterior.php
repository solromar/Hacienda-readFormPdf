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
                $taxName = $matches[1];

                // Crear una nueva entidad TaxModel y asignar el valor encontrado
                $taxModel = new TaxModel();
                $taxModel->setTaxName($taxName);

                $genericModel = null;

                if ($taxName == '111') {
                    $genericModel = new Model111();
                } elseif ($taxName == '115') {
                    $genericModel = new Model115();
                } elseif ($taxName == '190') {
                    $genericModel = new Model190();
                }elseif ($taxName == '200') {
                    $genericModel = new Model200();
                }elseif ($taxName == '303') {
                    $genericModel = new Model303();
                }elseif ($taxName == '347') {
                    $genericModel = new Model347();
                }elseif ($taxName == '390') {
                    $genericModel = new Model390();
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
