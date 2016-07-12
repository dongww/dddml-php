<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dddml\Command\CommandExecutor;
use Dddml\Query\QueryExecutor;
use Doctrine\Common\Annotations\AnnotationRegistry;

$baseUri = 'http://testtenant1.wms.dddml.org:63078/api';

AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    __DIR__ . "/../vendor/jms/serializer/src");

$auth = \Dddml\Auth::create(
    'http://testtenant1.wms.dddml.org:58760/oauth2/token',
    'test@dddml.org',
    '123456Abc!',
    '54fa1208384f4762a3ace231dbdbe88d'
);

$executor = new QueryExecutor($baseUri);
$executor->setAuth($auth);

return $executor;