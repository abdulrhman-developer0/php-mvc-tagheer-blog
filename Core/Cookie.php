<?php

namespace Core;

Class Cookie
{
    private function __construct(){}


    public static function set($name,$value)
    {
        setcookie(
            $name,$value,
        time() + (1 * 365 * 24 +60 * 60),
        '/','',false,true);
        return $value;
    }

    public static function has($name)
    {
        return isset($_COOKIE[$name]);
    }

    public static function get($name)
    {
        return static::has($name)? $_COOKIE[$name] : null;
    }

    public static function remove($name)
    {
        unset($_SESSION[$name]);
        $time = time();
        setcookie($name,null,$time-$time,'/');
    }

    public static function all()
    {
        return $_COOKIE;
    }

    public static function destroy()
    {
        foreach (static::all() as $name=>$value) {
            static::remove($name);
        }
    }
     
}