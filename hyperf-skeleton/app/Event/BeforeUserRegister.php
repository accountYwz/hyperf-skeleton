<?php
namespace App\Event;
use Hyperf\Utils\Context;

/**
 * @property bool $shouldRegister
 */
class BeforeUserRegister
{

//    protected $shouldRegister;

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return Context::get(__CLASS__.":".$name);
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        return Context::set(__CLASS__.":".$name,$value);
    }
}