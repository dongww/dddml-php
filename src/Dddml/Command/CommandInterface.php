<?php
/**
 * User: dongww
 * Date: 2016/6/1
 * Time: 19:52
 */

namespace Dddml\Command;


interface CommandInterface
{
    const COMMAND_CREATE      = 'Create';
    const COMMAND_MERGE_PATCH = 'MergePatch';
    const COMMAND_DELETE      = 'Delete';
    const COMMAND_REMOVE      = 'Remove';

    public function toJson();

    public function getType();
}