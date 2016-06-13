<?php
/**
 * User: dongww
 * Date: 2016/5/30
 * Time: 19:52
 */

namespace Dddml\Command\Type;

use Dddml\Command\CommandInterface;

class CreateCommand implements CommandInterface
{
    public function getType()
    {
        return self::COMMAND_CREATE;
    }

    public function toJson()
    {
        // TODO: Implement toJson() method.
    }
}