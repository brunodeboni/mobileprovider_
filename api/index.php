<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/../classes/MPClient.php';
require __DIR__ . '/MPApi.php';

// Inicializar o framework
$app = new \Slim\Slim();

require __DIR__ . '/mppainel/aplicativos.php';
require __DIR__ . '/mppainel/compras.php';


// Executar o framework
$app->run();
