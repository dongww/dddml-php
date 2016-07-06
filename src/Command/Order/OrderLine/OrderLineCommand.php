<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 20:59
 */
namespace Command\Order\OrderLine;

use Dddml\Command\CommandInterface;
use Dddml\Command\CommandTrait;
use Entity\Order\OrderLine\OrderLine as OrderLineEntity;
use JMS\Serializer\Annotation\Type;

class OrderLineCommand extends OrderLineEntity implements CommandInterface
{
    use CommandTrait;
    use IsPropertyRemovedTrait;
    use EmbeddedCommandTrait;

    /**
     * 获取查询对应的 URL
     *
     * @param string $type 执行的类型
     * @param        $baseUri
     * @param array  $parameters
     *
     * @return string
     */
    public function getUrl($type, $baseUri, array $parameters = [])
    {
        return null;
    }
}
