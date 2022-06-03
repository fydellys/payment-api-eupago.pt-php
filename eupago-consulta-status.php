<?php
require_once('vendor/autoload.php');
error_reporting(0);

// https://sandbox.eupago.pt
// https://clientes.eupago.pt

$chave_eupago = "demo-XXXX-XXXX-XXXX-XXX";
$numberRef = "000000296";

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://sandbox.eupago.pt/clientes/rest_api/multibanco/info', [
  'body' => json_encode(array( 'chave' => $chave_eupago, 'referencia' => $numberRef)),
  'headers' => [
    'Accept' => 'application/json',
    'Content-Type' => 'application/json',
  ],
]);

//$body = $response->getBody();
//echo $body;

$json = json_decode($response->getBody(), true);
?>

Entidade: <?= $json['entidade'] ?><br />
Referência: <?= $json['referencia'] ?><br />
Identificador: <?= $json['identificador'] ?><br />
Status de pagamento: <?php if (is_null($json['pagamentos'][0]['estado'])) {echo "Pendente";} else { echo $json['pagamentos'][0]['estado']; }; ?>



