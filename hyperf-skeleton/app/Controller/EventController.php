<?php
namespace App\Controller;
use App\Service\UserService;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
/**
 * Class EventController
 * @package App\Controller
 * @Controller(prefix="api/event")
 */
class EventController extends AbstractController
{
    /**
     * @Inject()
     * @var UserService
     */
    private $userService;

    /**
     * @RequestMapping(path="test",methods={"get"})
     */
    public function test(){
        return $this->userService->register();
    }

}