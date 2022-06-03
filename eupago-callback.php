<?php

// Importante: Esta notificação só é enviada se uma referência for paga. Atualmente, não há comunicações para transações expiradas, canceladas e/ou reembolsadas.

$chave_eupago = "demo-XXXX-XXXX-XXXX-XXX";

		if(isset($_REQUEST['valor']) 
		&& isset($_REQUEST['canal']) 
		&& isset($_REQUEST['referencia']) 
		&& isset($_REQUEST['transacao'])     
		&& isset($_REQUEST['identificador'])
		&& isset($_REQUEST['mp'])
		&& isset($_REQUEST['chave_api'])
		&& isset($_REQUEST['data'])
		&& isset($_REQUEST['entidade'])
		&& isset($_REQUEST['comissao'])
		&& isset($_REQUEST['local'])
		){
				// dados principais
				$valor 					= $_REQUEST['valor'];
				$canal 					= $_REQUEST['canal'];
				$referencia 			= $_REQUEST['referencia'];
				$transacao 				= $_REQUEST['transacao'];
				$identificador 			= $_REQUEST['identificador'];
				// complementares
				$mp 					= $_REQUEST['mp'];
				$chave_api 				= $_REQUEST['chave_api'];
				$data 					= $_REQUEST['data'];
				$entidade 				= $_REQUEST['entidade'];
				$comissao 				= $_REQUEST['comissao'];
				$local 					= $_REQUEST['local'];
			
							if($chave_api == $chave_eupago){

								// Local para você salvar no banco de dados
								// Salva dados em arquivo TXT - Testando

								$arquivo = fopen('eupago.txt','a+'); 
								$texto = "Referencia: " . $referencia . "\n";
								$texto .= "Metodo de pagamento: " . $mp . "\n";
								$texto .= "Valor: " . $valor . "\n";
								$texto .= "ID transacao: " . $transacao . "\n";
								$texto .= "Data pagamento: " . $data . "\n";
								$texto .= "Local: " . $local . "\n";
								$texto .= "==============================";
								fwrite($arquivo, $texto);
								fwrite($arquivo, "\n");
								fclose($arquivo);


							}	
		}

?>