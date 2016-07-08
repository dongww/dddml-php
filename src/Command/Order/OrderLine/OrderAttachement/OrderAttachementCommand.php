<?php
/**
 * User: dongww
 * Date: 2016/6/7
 * Time: 19:48
 */
namespace Command\Order\OrderLine\OrderAttachement;

use Dddml\Command\CommandInterface;
use Dddml\Command\CommandTrait;
use Entity\Order\OrderLine\OrderAttachement\OrderAttachementFieldsTrait;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Routing\Route;

class OrderAttachementCommand implements CommandInterface
{
    use CommandTrait;
    use OrderAttachementFieldsTrait;
    use IsPropertyRemovedTrait;

    /**
     * 获取执行的 http 方法
     *
     * @return string
     */
    public function getMethod()
    {
        return '';
    }

    /**
     * @return Route
     */
    public function getRoute()
    {
        return '';
    }
}
