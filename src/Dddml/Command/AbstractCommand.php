<?php
/**
 * User: dongww
 * Date: 2016/5/30
 * Time: 21:02
 */

namespace Dddml\Command;


abstract class AbstractCommand implements CommandInterface
{
    const COMMAND_CREATE      = 'Create';
    const COMMAND_MERGE_PATCH = 'MergePatch';
    const COMMAND_DELETE      = 'Delete';
    const COMMAND_REMOVE      = 'Remove';

    protected $type;

    protected $object;

    /**
     * @var CommandInterface
     */
    protected $children;

    protected $version = 0;

    /**
     * CommandId
     *
     * @var string
     */
    protected $id;

    protected $requesterId;

    /**
     * @var string[]
     */
    protected $removedProperties;

    /**
     * 命令的键名
     *
     * @var string|null
     */
    protected $key = null;

    public function toJson()
    {

    }

    /**
     * 传入对象，并根据对象的属性生成一系列嵌套的命令对象
     *
     * @param $object
     */
    public function setObject($object)
    {

    }
}