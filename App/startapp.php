<?php

use Core\Request;

define('DS', DIRECTORY_SEPARATOR );

define('ROOT', dirname(__DIR__).DS);
define('APP', ROOT.'app'.DS);
define('CORE', ROOT.'core'.DS);
define('VIEWS', ROOT.'views'.DS);
define('CONFIG', ROOT.'Config'.DS);
define('UPLOADS', ROOT.'PUBLIC'.DS.'uploads'.DS);


spl_autoload_register(function($class_name) {
    $file = ROOT.str_replace('\\',DS,$class_name).'.php';
    if ( file_exists($file) ) {
        require $file;
    }
});

function path(string $path)
{
    return str_replace('\\',DS,$path);
}

function loadPart(string $path,array $data = [])
{
    if (!empty($data)) foreach ($data as $var=>$val) $$var=$val;
    require path(VIEWS.'partials'.DS.str_replace('.',DS,$path).'.php');
}

function view(string $view,array $data =[])
{
    ob_start();
    if (!empty($data)) foreach ($data as $var=>$val) $$var=$val;
    require VIEWS.$view.'.php';
    $html = ob_get_clean();
    return $html;
}

function redirect(string $location = '/')
{
    header('location: '.$location);
    exit();
}

function query(string $sql)
{
    return App::$db->query($sql);
}



