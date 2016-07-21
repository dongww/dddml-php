<?php
/**
 * User: dongww
 * Date: 2016/7/21
 * Time: 13:43
 */
namespace Dddml;

interface FlattenedDtoInterface
{
    public function toString();

    public function fromString($data);
}