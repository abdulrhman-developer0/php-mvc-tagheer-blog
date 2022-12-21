<?php

namespace Core;

use App;

class Controller
{

    public function redirect(string $url)
    {
        header('location:'.$url);
        exit();
    }

    public function model(string $model_class)
    {
            $Model = 'App\\Models\\'.$model_class;
            return new $Model();
    }

    

    public function view(string $view_path,array $data = [])
    {
        $view = VIEWS.str_Replace('.',DS,$view_path).'.php';
        if (file_exists($view)) {
            foreach ($data as $var=>$val) $$var = $val;
            ob_start();
            require $view;
            return ob_get_clean();
        }
        return 'View Error: view "'.$view.'" Not found.';
    }
}