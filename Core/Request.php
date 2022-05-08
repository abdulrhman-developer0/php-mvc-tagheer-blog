<?php

namespace Core;

class Request
{
    private function __construct() {}

    private static function key_in(string $key,array $array)
    {
        return isset($array[$key]);
    }

    private  static function array_get_keys($keys,$array)
    {
        foreach ($keys as $key) $resualt[$key] = (static::key_in($key,$array))? $array[$key] : null;
        return $resualt;
    }


    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function uri()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public static function get( $key = null)
    {
        if (!$key) return $_GET;
        if (is_array($key)) return static::array_get_keys($key,$_GET);
        return (static::key_in($key,$_GET))? $_GET[$key] : null;
    }

    public static function post( $key = null)
    {
        if (!$key) return $_POST;
        if (is_array($key)) return static::array_get_keys($key,$_POST);
        return (static::key_in($key,$_POST))? $_POST[$key] : null;
    }

    public static function files( $key = null)
    {
        if (!$key) return $_FILES;
        if (is_array($key)) return static::array_get_keys($key,$_FILES);
        return (static::key_in($key,$_FILES))? $_FILES[$key] : null;
    }

    public static function upload_file(string $filename,string $to)
    {
        $file = static::files($filename);
        $tmp_name = $file['tmp_name'];
        $name = $file['name'];
        move_uploaded_file($tmp_name,$to.$name);
        return $name;
    }

}