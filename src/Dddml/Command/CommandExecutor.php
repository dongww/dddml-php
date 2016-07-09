<?php
/**
 * User: dongww
 * Date: 2016/6/13
 * Time: 19:29
 */
namespace Dddml\Command;

use Dddml\AbstractExecutor;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\RequestContext;

/**
 * 命令执行类，所有的命令都经由此类来执行
 *
 * @package Dddml\Command
 */
class CommandExecutor extends AbstractExecutor
{
    /**
     * 执行命令
     *
     * @param CommandInterface $command 命令对象
     * @param array            $option  相关选项
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function execute(CommandInterface $command, array $option = [])
    {
        $routes = $this->getRoutes();
        $routes->add('route', $command->getRoute());

        $generator = new UrlGenerator(
            $routes,
            new RequestContext($this->baseUri)
        );

        $url = $generator->generate('route', $option['parameters'] ?: []);

        $response = $this->client->request(
            $command->getMethod(),
            $url,
            $this->getClientOption($command, $option)
        );

        return $response;
    }

    /**
     * 将命令和 execute 中的参数转换成 HttpClient 所需的参数，并返回
     *
     * @param CommandInterface $command   命令对象
     * @param array            $extOption 附加的选项
     *
     * @return array
     */
    protected function getClientOption(
        CommandInterface $command,
        array $extOption = []
    ) {
        $clientOption = parent::__getClientOption($extOption);

        if ($body = $command->getBody()) {
            $clientOption['body'] = $this->serializer->serialize($body, 'json');
        }

        return $clientOption;
    }
}
