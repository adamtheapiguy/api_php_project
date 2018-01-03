<?php

require 'vendor/autoload.php';

function ServiceHandler() {
    $data = new stdClass();
    $data->Output = "Hello World!";

    return json_encode($data);
};

$app = new \Slim\App;

$app->get('/customers/[0-9]{9,20}', 'ServiceHandler');
$app->post('/', 'ServiceHandler');

$app->run();
