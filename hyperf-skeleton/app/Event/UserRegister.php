<?php
/**
 * @Notes:
 * @User: ywz
 * @Date: 2021/7/7
 */

namespace App\Event;


class UserRegister
{
    public $userId;
    public function __construct($userId)
    {
        $this->userId = $userId;
    }
}