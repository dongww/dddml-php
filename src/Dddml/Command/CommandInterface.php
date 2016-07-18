<?php
/**
 * User: dongww
 * Date: 2016/7/8
 * Time: 17:04
 */
namespace Dddml\Command;

interface CommandInterface
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
