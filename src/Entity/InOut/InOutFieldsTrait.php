<?php
/**
 * User: dongww
 * Date: 2016/7/19
 * Time: 16:56
 */
namespace Entity\InOut;

use Dddml\StateTrait;
use JMS\Serializer\Annotation\Type;

trait InOutFieldsTrait
{
    use StateTrait;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $documentNumber;

    /**
     * @Type("boolean")
     *
     * @var boolean
     */
    private $isSOTransaction;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $documentStatus;

    /**
     * @Type("boolean")
     *
     * @var boolean
     */
    private $posted;

    /**
     * @Type("boolean")
     *
     * @var boolean
     */
    private $processing;

    /**
     * @Type("boolean")
     *
     * @var boolean
     */
    private $processed;

    /**
     * @Type("integer")
     *
     * @var int
     */
    private $documentType;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $description;

    //以下略。。。
}
