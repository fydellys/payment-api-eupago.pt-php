<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://sandbox.eupago.pt/clientes/rest_api/multibanco/create', [
  'body' => '{"chave":"demo-XXXX-XXXX-XXXX-XXX","valor":"10.5","id":"Example-em-JSON","data_inicio":"2022-06-01","data_fim":"2022-06-05","per_dup":1}',
  'headers' => [
    'Accept' => 'application/json',
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();