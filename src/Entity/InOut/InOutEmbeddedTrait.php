<?php
/**
 * User: dongww
 * Date: 2016/7/19
 * Time: 17:08
 */
namespace Entity\InOut;

use Entity\InOut\InOutLine\InOutLine;
use JMS\Serializer\Annotation\Type;

trait InOutEmbeddedTrait
{
    /**
     * @Type("array<Entity\InOut\InOutLine\InOutLine>")
     * @var  InOutLine[]
     */
    private $inOutLines;
}
