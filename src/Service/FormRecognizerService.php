<?php

namespace App\Service;

use App\Entity\TaxModel;
use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class FormRecognizerService
{

    private $subscriptionKey;
    private $parameterBag;

    public function __construct(string $subscriptionKey, ParameterBagInterface $parameterBag)
    {
        $this->subscriptionKey = $subscriptionKey;
        $this->parameterBag = $parameterBag;
    }
    
    
    // --------------------------------------------- Solicitud POST para obtener el resultID ------------------------------------------------------------------------//
    public function analyzeDocumentAction($modelId, $pdfFile)
{
    $endpoint = 'https://westeurope.api.cognitive.microsoft.com/';
    $apiVersion = '2023-07-31';
    $stringIndexType = 'utf16CodeUnit';

    $url = $endpoint . 'formrecognizer/documentModels/' . $modelId . ':analyze' .
        '?api-version=' . $apiVersion . '&stringIndexType=' . $stringIndexType;

    $client = new Client();

    try {
        // Abrir el archivo en modo de lectura
        $handle = fopen($pdfFile, 'r');

        if ($handle) {
            // Leer todo el contenido del archivo
            $content = stream_get_contents($handle);

            // Cerrar el recurso del archivo después de leerlo
            fclose($handle);

            // Realizar el análisis utilizando el contenido del archivo como cuerpo del POST
            $response = $client->post($url, [
                'headers' => [
                    'Content-Type' => 'application/octet-stream',
                    'Ocp-Apim-Subscription-Key' => $this->subscriptionKey,
                ],
                'body' => $content,
            ]);

            $apimRequestId = $response->getHeader('apim-request-id')[0];
            return $apimRequestId;
        } else {
            // Manejar el error si no se pudo abrir el archivo
            throw new \Exception('Error opening the file: ' . $pdfFile);
        }
    } catch (\GuzzleHttp\Exception\RequestException $e) {
        throw new \Exception('Error fetching data from the API: ' . $e->getMessage());
    }
}

    // ------------------------------------------------------  Get para obtener el Json del Model solicitado -----------------------------------------------------//
    public function getResultByRequestId($modelId, $resultId)
{
    $endpoint = 'https://westeurope.api.cognitive.microsoft.com/';
    $apiVersion = '2023-07-31';

    $url = $endpoint . 'formrecognizer/documentModels/' . $modelId . '/analyzeResults/' . $resultId .
        '?api-version=' . $apiVersion;

    $client = new Client();

    try {
        do {
            sleep(4);  // Esperar un segundo

            $response = $client->get($url, [
                'headers' => [
                    'Ocp-Apim-Subscription-Key' => $this->subscriptionKey,
                ],
            ]);

            $result = json_decode($response->getBody(), true);
        } while ($result['status'] == 'running');

        if ($result['status'] == 'succeeded') {
            // Procesar el resultado
            return $result['analyzeResult'];
        } else {
            throw new \Exception('An error occurred: ' . $result['status']);
        }
    } catch (\GuzzleHttp\Exception\RequestException $e) {
        throw new \Exception('Error fetching data from the API: ' . $e->getMessage());
    }
}
}
