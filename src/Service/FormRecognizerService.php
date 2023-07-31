<?php

namespace App\Service;

use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Response;

class FormRecognizerService
{

    private $subscriptionKey;

    public function __construct(string $subscriptionKey)
    {
        $this->subscriptionKey = $subscriptionKey;
    }

    // --------------------------------------------- Solicitud POST para obtener el resultID ------------------------------------------------------------------------//
    public function analyzeDocumentAction()
    {
        $modelId = 'Model303'; //aca va el model entrenado
        $urlSource = 'https://pruebahacienda111.blob.core.windows.net/models/MOD 303 3T 2022 SMART SCROW.pdf'; // aca van los pdf que estan en el contenedor

        $endpoint = 'https://prueba1se.cognitiveservices.azure.com';
        $apiVersion = '2022-08-31';
        $stringIndexType = 'textElements';

        $url = $endpoint . '/formrecognizer/documentModels/' . $modelId . ':analyze' .
            '?api-version=' . $apiVersion . '&stringIndexType=' . $stringIndexType;

        $client = new Client();

        try {
            $response = $client->post($url, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Ocp-Apim-Subscription-Key' => $this->subscriptionKey,
                ],
                'json' => [
                    'urlSource' => $urlSource,
                ],
            ]);

            $apimRequestId = $response->getHeader('apim-request-id')[0];

            return $apimRequestId;
        } catch (\GuzzleHttp\Exception\RequestException $e) {

            throw new \Exception('Error fetching data from the API: ' . $e->getMessage());
        }
    }
    // ------------------------------------------------------  Get para obtener el Json del Model solicitado -----------------------------------------------------//
    public function getResultByRequestId(string $resultId)
    {
        $endpoint = 'https://prueba1se.cognitiveservices.azure.com';
        $apiVersion = '2022-08-31';

        $url = $endpoint . '/formrecognizer/documentModels/Model303/analyzeResults/' . $resultId .
            '?api-version=' . $apiVersion;

        $client = new Client();

        try {
            do {
                sleep(1);  // Wait for a second

                $response = $client->get($url, [
                    'headers' => [
                        'Ocp-Apim-Subscription-Key' => $this->subscriptionKey,
                    ],
                ]);

                $result = json_decode($response->getBody());
            } while ($result->status == 'running');

            if ($result->status == 'succeeded') {
                // Process the result
                return $result->analyzeResult;
            } else {
                throw new \Exception('An error occurred: ' . $result->status);
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            throw new \Exception('Error fetching data from the API: ' . $e->getMessage());
        }
    }
}
