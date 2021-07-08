<?php

declare(strict_types=1);

namespace App\Listener;

use App\Event\BeforeUserRegister;
use App\Event\UserRegister;
use Hyperf\Event\Annotation\Listener;
use Psr\Container\ContainerInterface;
use Hyperf\Event\Contract\ListenerInterface;

/**
 * @Listener
 */
class LoginEventListener implements ListenerInterface
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
            BeforeUserRegister::class,
            UserRegister::class,
        ];
    }

    public function process(object $event)
    {
        if($event instanceof BeforeUserRegister){
            echo get_class($event).$event->shouldRegister.PHP_EOL;
        }else if ($event instanceof UserRegister){
            echo get_class($event).$event->userId.PHP_EOL;
        }
    }
}