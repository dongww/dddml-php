<?php
/**
 * User: dongww
 * Date: 2016/6/1
 * Time: 19:52
 */
namespace Dddml\Command;

use Symfony\Component\HttpFoundation\Request;

interface CommandInterface
{
    const COMMAND_QUERY       = 'Query';
    const COMMAND_CREATE      = 'Create';
    const COMMAND_MERGE_PATCH = 'MergePatch';
    const COMMAND_DELETE      = 'Delete';
    const COMMAND_REMOVE      = 'Remove';

    public function getCommandType();
}
