<?php
/**
 * User: dongww
 * Date: 2016/7/13
 * Time: 20:00
 */
namespace Dddml\Command;

interface CommandRequestInterface
{
    const COMMAND_CREATE      = 'Create';
    const COMMAND_MERGE_PATCH = 'MergePatch';
    const COMMAND_DELETE      = 'Delete';

    /**
     * @return CommandInterface
     */
    public function getCommand();
}
