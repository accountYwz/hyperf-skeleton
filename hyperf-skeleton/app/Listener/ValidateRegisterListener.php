<?php

declare(strict_types=1);

namespace App\Listener;

use App\Event\BeforeUserRegister;
use Hyperf\Event\Annotation\Listener;
use Psr\Container\ContainerInterface;
use Hyperf\Event\Contract\ListenerInterface;

/**
 * @Listener(priority=5)
 */
class ValidateRegisterListener implements ListenerInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function listen(): array
    {
        return [
            BeforeUserRegister::class
        ];
    }

    /**
     *
     * //为了调用方便此处先这样写
     * @param BeforeUserRegister $event
     * @author liubo 2020-06-12 15:27
     */
    public function process(object $event)
    {
        $event->shouldRegister = (bool)rand(0,1);
        if(!$event->shouldRegister){
            echo "很抱歉，您无权注册！".PHP_EOL;
        }else{
            echo "欢迎注册！".PHP_EOL;
        }
    }
}