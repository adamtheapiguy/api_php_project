<?php

require 'vendor/autoload.php';

function ServiceHandler() {
    $data = new stdClass();
    $data->Output = "Hello World!" . "test";

    return json_encode($data);
};

$app = new \Slim\App;

$app->get('/customers', 'ServiceHandler');
$app->post('/', 'ServiceHandler');

$app->run();
