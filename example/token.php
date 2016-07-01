<?php
require_once __DIR__ . '/../vendor/autoload.php';

$token = \Dddml\Auth::create(
    'http://testtenant1.wms.dddml.org:58760/oauth2/token',
    'test@dddml.org',
    '123456Abc!',
    '54fa1208384f4762a3ace231dbdbe88d'
);

var_dump($token);
echo $token->getToken();