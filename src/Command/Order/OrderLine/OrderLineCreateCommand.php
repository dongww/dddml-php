<?php
/**
 * User: dongww
 * Date: 2016/7/8
 * Time: 11:05
 */
namespace Command\Order\OrderLine;

use Dddml\Command\CommandBodyInterface;
use Dddml\Command\CommandInterface;
use Dddml\Routing\RouteTrait;

class OrderLineCreateCommand implements CommandInterface
{
    use RouteTrait;

    /**
     * @var OrderLineCommandBody
     */
    private $body;

    public function getMethod()
    {
        return '';
    }

    /**
     * @return OrderLineCommandBody
     */
    public function getBody()
    {
        if (!$this->body) {
            $this->body = new OrderLineCommandBody();
        }

        return $this->body;
    }
}
