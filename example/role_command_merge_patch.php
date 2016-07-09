<?php
use Command\Role\RoleMergePatchCommand;
use Dddml\Command\CommandExecutor;

/** @var CommandExecutor $executor */
$executor = require_once __DIR__ . '/wms_bootstrap.php';

$roleId = 'testManager1';

$roleCommand = new RoleMergePatchCommand();
$role = $roleCommand->getBody();
$role->setVersion(1);
$role->setCommandId('commandId001');
$role->setRequesterId('requesterId001');
$role->setRoleId($roleId);
$role->setName('测试角色1');
$role->setDescription('测试说明1');
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
var_dump($response->getBody()->getContents());