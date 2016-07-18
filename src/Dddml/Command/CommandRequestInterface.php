<?php
/**
 * User: dongww
 * Date: 2016/7/18
 * Time: 20:49
 */
namespace Dddml\Command;

interface CommandRequestInterface
{
    const COMMAND_CREATE      = 'Create';
    const COMMAND_MERGE_PATCH = 'MergePatch';
    const COMMAND_DELETE      = 'Delete';
    const COMMAND_REMOVE      = 'Remove';

    /**
     * @return CommandInterface
     */
    public function getCommand();
}