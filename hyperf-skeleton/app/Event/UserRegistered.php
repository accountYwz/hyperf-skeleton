<?php
/**
 * @Notes:
 * @User: ywz
 * @Date: 2021/7/7
 */
namespace App\Event;


class UserRegistered
{
    // 建议这里定义成 public 属性，以便监听器对该属性的直接使用，或者你提供该属性的 Getter
    public $user;

    public function __construct($user)
    {
        echo '已执行!!!!!__construct';
        $this->user = $user;
    }
}