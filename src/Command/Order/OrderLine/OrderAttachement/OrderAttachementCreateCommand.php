<?php
/**
 * User: dongww
 * Date: 2016/7/8
 * Time: 10:57
 */
namespace Command\Order\OrderLine\OrderAttachement;

use Dddml\Command\CommandBodyInterface;
use Dddml\Command\CommandInterface;
use Dddml\Routing\RouteTrait;

class OrderAttachementCreateCommand implements CommandInterface
{
    use RouteTrait;

    /**
     * @var CommandBodyInterface
     */
    private $body;

    public function getMethod()
    {
        return '';
    }

    /**
     * @return OrderAttachementCommandBody
     */
    public function getBody()
    {
        if (!$this->body) {
            $this->body = new OrderAttachementCommandBody();
        }

        return $this->body;
    }
}
