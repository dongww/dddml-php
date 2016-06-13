<?php
/**
 * User: dongww
 * Date: 2016/6/1
 * Time: 19:43
 */

namespace Dddml\Command\Type;


use Dddml\Command\CommandTrait;
use Dddml\Command\CommandInterface;

class CommandCollections implements CommandInterface
{
    protected $key = null;

    /**
     * @var CommandInterface[]
     */
    protected $commands;

    public function addCommand(CommandInterface $command)
    {
        
    }

    public function toJson()
    {
        // TODO: Implement toJson() method.
    }
}