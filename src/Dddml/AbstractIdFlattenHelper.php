<?php
/**
 * User: dongww
 * Date: 2016/7/20
 * Time: 15:15
 */
namespace Dddml;

use Entity\InOut\InOutLine\InOutLineId;

class AbstractIdFlattenHelper
{
    protected static $setFunctions = null;

    protected static $getFunctions = null;

    protected static $idClassName =  null;

    /**
     * @var InOutLineId
     */
    protected $value;

    /**
     * @param IdFlattenEnable $value
     */
    public function __construct(IdFlattenEnable $value = null)
    {
        if ($value) {
            $this->value = $value;
        } else {
            $this->value = new static::$idClassName();
        }
    }

    /**
     * @param string $idStr
     *
     * @return InOutLineId
     */
    public function stringToInOutLineId($idStr)
    {
        $values = explode(',', $idStr);

        for ($i = 0; $i < count(static::$setFunctions); $i++) {
            call_user_func([$this, static::$setFunctions[$i]], $values[$i]);
        }

        return $this->value;
    }

    public function toString()
    {
        $values = [];

        foreach (static::$getFunctions as $func) {
            $values[] = call_user_func([$this, $func]);
        }

        return implode(',', $values);
    }
}
