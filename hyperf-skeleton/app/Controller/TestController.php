<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\Service\UserService;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
/**
 * Class TestController
 * @package App\Controller
 * @Controller(prefix="api/test")
 */
class TestController extends AbstractController
{

    /**
     * @RequestMapping(path="index",methods={"get"})
     */
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

//        $server = new UserService();
//
//
//        $server->register();
        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }
}
