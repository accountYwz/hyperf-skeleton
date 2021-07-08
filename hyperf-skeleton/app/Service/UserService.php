<?php


namespace App\Service;


use App\Event\BeforeUserRegister;
use App\Event\UserRegister;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Framework\Event\BootApplication;
use Psr\EventDispatcher\EventDispatcherInterface;

class UserService
{

    /**
     * @Inject()
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;


    public function register()
    {
        //验证是否有注册权限
        $beforeUserRegister=new BeforeUserRegister();

        $this->eventDispatcher->dispatch(new BeforeUserRegister());
//        if($beforeUserRegister->shouldRegister){
//            //注册用户
//            $userId =rand(0,9999);
//            //注册成功后
//            $this->eventDispatcher->dispatch(new UserRegister($userId));
//            return $userId;
//        }else{
//            return "不可注册！";
//        }
    }

}