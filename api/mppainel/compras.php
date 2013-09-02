<?php

/**
 * Retorna os dados que o cliente precisa pra fazer a compra
 */
$app->get('/dados_compras', function() {
	// Somente clientes podem acessar essa página
	$api = MPApi::instance();
	//$api->onlyClient();
	
	$cliente_id = $api->getCid();
	//$cliente = MPClient::getClient('brunodeboni@gmail.com');
	$conn = MPDatabase::db();
	$query = $conn->query('select empresa from clientes');
	$clientes = $query->fetchAll();
	die(json_encode($clientes));
	 
	//echo 'aqui';
});

//$app->post('/compra');

$app->post('/receber_pagseguro', function() {
	// $_POST
	$dados = array();
	
	
	$dados['licenca_id'] = 123;
	$dados['licenca_dias_restantes'] = 20;
	
	die(json_encode(
		MPClient::retorno(false, 'deu certo')
	));
});
