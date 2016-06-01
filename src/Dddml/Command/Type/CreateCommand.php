<?php
/**
 * User: dongww
 * Date: 2016/5/30
 * Time: 19:52
 */

namespace Dddml\Command\Type;

use Dddml\Command\AbstractCommand;

class CreateCommand extends AbstractCommand
{
    public function getType()
    {
        return self::COMMAND_CREATE;
    }
}