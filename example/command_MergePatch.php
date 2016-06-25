<?php
use Command\Order\Order;
use Command\Order\OrderLine\OrderAttachement\OrderAttachement;
use Command\Order\OrderLine\OrderLine;
use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandInterface;
use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;
use PhpGo\ApiService\ApiService;

require_once __DIR__ . '/../vendor/autoload.php';

$orderId             = 'orderId001';
$orderLineId         = 'orderLineId001';
$orderAttachementsId = 'orderAttachementsId001';
$attachementTypeId   = 123;

$oa = new OrderAttachement(CommandInterface::COMMAND_MERGE_PATCH);

$oa->setCommandId('commandId001');
$oa->setRequesterId('requesterId001');
$oa->setOrderId($orderId);
$oa->setOrderLineId($orderLineId);
$oa->setId($orderAttachementsId);
$oa->setActive(true);
$oa->setAttachementTypeId($attachementTypeId);
$oa->setAttachementTypeName('attachementTypeName001');
$oa->setAttachementUrl('http://attachement.url');
$oa->setVersion(2);

$ol = new OrderLine(CommandInterface::COMMAND_MERGE_PATCH);
$ol->setCommandId('commandId001');
$ol->setRequesterId('requesterId001');
$ol->setId($orderLineId);
$ol->setOrderId($orderId);
$ol->setActive(true);
$ol->setProductId('productId001');
$ol->setPoProductNo('productNo001');
$ol->setProductName('productName001');
$ol->setAttributeSetInstanceId('attributeSetInstanceId001');
$ol->setSkuName('skuName001xx');
$ol->setQuantity(1.1);
$ol->setQuantityUomId('quantityUomId001');
$ol->setListPrice(1.0);
$ol->setListPriceUomId('listPriceUomId001');
$ol->setActualPrice(1.2);
$ol->setActualPriceUomId('actualPriceUomId001');
$ol->setOrganizationId('organizationId001');
$ol->setOrganizationName('organizationName001');
$ol->setLogisticalNo('logisticalNo001');
$ol->setStatus('status001');
$ol->setVersion(2);

$ol->setOrderAttachements([$oa]);

$order = new Order(CommandInterface::COMMAND_MERGE_PATCH);
$order->setCommandId('commandId001');
$order->setRequesterId('requesterId001');
$order->setId($orderId);
$order->setActive(true);
$order->setOrderNo('orderNo001');
$order->setStatus(2);
$order->setDescription('description001');
$order->setIsPropertyActiveRemoved(true);
$order->setVersion(2);

$order->addOrderLine($ol);

$baseUri = 'http://10.201.10.16:9999/api/';

AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    __DIR__ . "/../vendor/jms/serializer/src");

$cs   = new CamelCaseNamingStrategy('', false);
$snas = new SerializedNameAnnotationStrategy($cs);

$serializer = SerializerBuilder::create()
    ->setPropertyNamingStrategy($snas)
    ->build();

//$apiService = new ApiService($basePath, $serializer);

$executor = new CommandExecutor($baseUri, $serializer);

$response = $executor->execute($order, "Orders/{$orderId}");

var_dump($response->getBody()->getContents());