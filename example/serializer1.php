<?php
use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use ValueObject\Store\AllQuery;
use JMS\Serializer\SerializerBuilder;

require_once __DIR__ . '/../vendor/autoload.php';

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Accessor;

AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    __DIR__ . "/../vendor/jms/serializer/src");

$cs = new CamelCaseNamingStrategy('', false);
$snas = new SerializedNameAnnotationStrategy($cs);

$serializer = SerializerBuilder::create()
    ->setPropertyNamingStrategy($snas)
    ->build();

$json = '
    {
        "active": true,
        "businessLicence": "asdfasdf"
    }';

/** @AccessType("public_method") */
class Item
{
    /**
     * @Type("boolean")
     * @var bool
     */
    private $active;
    /**
     * @Type("string")
     * @Accessor(getter="getBusinessLicence",setter="setBusinessLicence")
     * @var string
     */
    private $businessLicence;

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return string
     */
    public function getBusinessLicence()
    {
        return $this->businessLicence;
    }

    /**
     * @param string $businessLicence
     */
    public function setBusinessLicence($businessLicence)
    {
        $this->businessLicence = $businessLicence;
    }
}

class Ser extends \PhpCollection\AbstractCollection
{
    /**
     * @Type("array<Item>")
     */
    private $items;

    /**
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }
}

$address = $serializer->deserialize($json, 'Item', 'json');
var_dump($address);