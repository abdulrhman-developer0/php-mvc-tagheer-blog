<?php

namespace Core;

class App
{
    public static $root;
    public static $db;

    public function __construct(string $root)
    {
        static::$root = $root;
        static::$db  = new MySQL('eso.host','root','','tagheer');
        Session::start();
    }

    public function run()
    {
        Router::execute();
    }
}