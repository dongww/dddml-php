<?php
use Command\Role\RoleCreateCommand;
use Dddml\Command\CommandExecutor;

/** @var CommandExecutor $executor */
$executor = require_once __DIR__ . '/wms_bootstrap.php';

$roleId = 'testManager1';

$roleCommand = new RoleCreateCommand();
$role = $roleCommand->getBody();
$role->setCommandId('commandId001');
$role->setRequesterId('requesterId001');
$role->setRoleId($roleId);
$role->setName('测试角色1');
$role->setDescription('测试说明');
$role->setActive(true);
$role->setIsPropertyActiveRemoved(true);
$role->setIsPropertyNameRemoved(true);
$role->setIsPropertyDescriptionRemoved(true);

$response = $executor->execute($roleCommand, [
    'parameters' => [
        'id' => $roleId,
    ],
]);

var_dump($response->getStatusCode());