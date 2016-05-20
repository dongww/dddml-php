<?php
use Doctrine\Common\Annotations\AnnotationRegistry;
use ValueObject\Store\AllQuery;
use JMS\Serializer\SerializerBuilder;

require_once __DIR__ . '/../vendor/autoload.php';

AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    __DIR__ . "/../vendor/jms/serializer/src");

$serializer = SerializerBuilder::create()->build();

//$query = new AllQuery('Store', true, 10);
//
//$json = $serializer->serialize($query, 'json');
//
//var_dump($json);

$json = '
    [{
        "active": true,
        "address": {
            "addressLine1": "",
            "cityId": "",
            "country": "中国",
            "countyId": "",
            "new": true,
            "postalCode": "",
            "provinceId": ""
        },
        "businessLicence": "",
        "createdTime": "2016-05-19",
        "description": "",
        "email": "",
        "id": "ff80808154c85d6f0154c8aa9cf70003",
        "linkman": "",
        "mobilePhone": "13234335544",
        "name": "吉林门店",
        "qq": "",
        "telephone": ""
    }]';

$address = $serializer->deserialize($json, 'ValueObject\\Store\\ResponseBody\\StoreCollection', 'json');
var_dump($address);