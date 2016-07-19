<?php
/**
 * User: dongww
 * Date: 2016/7/19
 * Time: 17:19
 */
namespace Entity\InOut\InOutLine;

use JMS\Serializer\Annotation\Type;
use ValueObject\InOut\InOutLine\SkuId;

trait InOutLineFieldsTrait
{
    /**
     * @Type("string")
     *
     * @var string
     */
    private $inOutDocumentNumber;

    /**
     * @Type("array<ValueObject\InOut\InOutLine\SkuId>")
     * @var  SkuId
     */
    private $skuId;

    //以下略。。。
}