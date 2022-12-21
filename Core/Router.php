<?php

namespace Core;

use App;

use Closure;

class Router
{
    private static $routes = [];

    private static function addRoute(string $methods, string $route, $action)
    {
        foreach (explode('|',$methods) as $method) static::$routes[$method][$route] = $action;
    }

    public static function get(string $route, $action)
    {
        static::addRoute('GET',$route,$action);
    }

    public static function post(string $route, $action)
    {
        static::addRoute('POST',$route,$action);
    }

    public static function any(string $route, $action)
    {
        static::addRoute('GET|POST',$route,$action);
    }

    private static function getPrams(string $route, string $uri)
    {
        $prams = [];
        preg_match('/\/\{.*\}/',$route,$keys);
        $pattern = '#^' . preg_replace('/\/\{.*\}/','/(.*)',$route) . '$#';
       $bool = preg_match($pattern,$uri,$values) ;
        array_shift($values);
        for ($i=0;$i<count($keys) && $i<count($values);$i+=1) $prams[trim($keys[$i],'/{}')] =  $values[$i];
        return $prams;
    }

    private static function runAction($action,$vars)
    {
        if (is_callable($action)) return $action($vars);
        if (is_string($action)) {
            $cam = explode('.',$action);
            if (count($cam)==2) {
                $controller = 'App\\Controllers\\'.$cam[0];
                $method    = $cam[1];
                return (new $controller)->$method($vars);
            }
        }

    }

    public static function execute()
    {
        $uri = explode('?',Request::uri())[0];
        $routes = static::$routes[Request::method()] ?? [];

        foreach ($routes as $route=>$action) {
            $pattern = '#^'.preg_replace('/\/\{.*\}/','/(.*)',$route).'$#';
            if (preg_match($pattern,$uri)){
                $vars = static::getPrams($route,$uri);
                echo static::runAction($action,$vars);
                return true;
            }
        }
        echo '404';
        return false;
    }
}