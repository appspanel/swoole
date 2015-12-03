<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/7/10
 * Time: 上午11:12
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 * WebSite: http://www.janhuang.me
 */

namespace FastD\Swoole\HttpServer;

use FastD\Swoole\Swoole;
use FastD\Swoole\Context;

/**
 * The swoole http server
 *
 * Class Http
 *
 * @package FastD\Swoole\HttpServer
 */
class Http extends Swoole
{
    /**
     * @param Context $context
     * @param         $mode
     * @param         $sockType
     */
    public function __construct(Context $context, $mode = SWOOLE_PROCESS, $sockType = SWOOLE_SOCK_TCP)
    {
        parent::__construct($context, $mode, $sockType);

        $this->server = new \swoole_http_server($context->getHost(), $context->getPort(), $mode, $sockType);
    }
}