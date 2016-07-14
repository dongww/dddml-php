<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Dddml\Generator\Generator;

$generator = new Generator();

$twig = $generator->getTwig();

$template = $twig->loadTemplate('class/class.php.twig');

$classContent = $template->render([
    'class_namespace' => 'A\B\C',
    'used_namespaces' => [
        'D\E',
        'F\G',
    ],
    'class_name'      => 'TestClass',
    'traits'          => ['H', 'I'],

    'properties' => [
        [
            'serializer_type' => 'string',
            'php_type'        => 'string',
            'name'            => 'roleId',
        ],
    ],

    'functions' => [
        [
            'type'     => 'string',
            'property' => 'roleId',
        ],
    ],
]);

file_put_contents(__DIR__ . '/output/TestClass.php', $classContent);