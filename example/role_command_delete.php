<?php
use Command\Role\RoleDeleteCommand;
use Dddml\Command\CommandExecutor;

/** @var CommandExecutor $executor */
$executor = require_once __DIR__ . '/wms_command_bootstrap.php';

$roleId = 'testManager1';

$roleCommand = new RoleDeleteCommand();

$response = $executor->execute($roleCommand, [
    'parameters' => [
        'id' => $roleId,
    ],
    'query'      => [
        'commandId'   => 'commandId001',
        'version'     => '2',
        'requesterId' => 'requesterId001',
    ],
]);

var_dump($response->getStatusCode());
