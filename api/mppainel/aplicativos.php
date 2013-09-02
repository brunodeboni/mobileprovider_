<?php

/**
 * Lista de aplicativos
 */
$app->get('/aplicativos', function() {
	MPApi::instance()->onlyClient();
	
	$conn = MPDatabase::db();
	$qry = $conn->query('select * from aplicativos where public = 1');
	die(json_encode(array('data' => $qry->fetchAll())));
});
