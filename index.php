<?php

require 'vendor/autoload.php';

function ServiceHandler($id) {
    $data = new stdClass();
    $data->Output = "Hello World!" . "test" . $id;

    return json_encode($data);
};

$app = new \Slim\App;

$app->get('/customers/:id', 'ServiceHandler');
$app->post('/customers/:id', 'ServiceHandler');

$app->run();
