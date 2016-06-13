<?php
use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\Type;

require_once __DIR__ . '/../vendor/autoload.php';

AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    __DIR__ . "/../vendor/jms/serializer/src");

$cs = new CamelCaseNamingStrategy('', false);
$snas = new SerializedNameAnnotationStrategy($cs);

$serializer = SerializerBuilder::create()
    ->setPropertyNamingStrategy($snas)
    ->build();

class A
{
    /**
     * @Type("string")
     * @var
     */
    private $var1;

    /**
     * @param mixed $var1
     */
    public function setVar1($var1)
    {
        $this->var1 = $var1;
    }

    /**
     * @return mixed
     */
    public function getVar1()
    {
        return $this->var1;
    }
}

class B extends A
{
    /**
     * @Type("string")
     * @var
     */
    private $var2;

    /**
     * @return mixed
     */
    public function getVar2()
    {
        return $this->var2;
    }

    /**
     * @param mixed $var2
     */
    public function setVar2($var2)
    {
        $this->var2 = $var2;
    }
}

$b = new B();
$b->setVar1('11');
$b->setVar2('22');

$json = $serializer->serialize($b, 'json');
var_dump($json);

