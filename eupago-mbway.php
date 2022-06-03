<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://sandbox.eupago.pt/clientes/rest_api/mbway/create', [
  'body' => '{"chave":"demo-XXXX-XXXX-XXXX-XXX","valor":"12.95","id":"Exemplo-em-JSON","alias":"987654321","descricao":"Pagamento"}',
  'headers' => [
    'Accept' => 'application/json',
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();