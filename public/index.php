<?php


require_once dirname(__DIR__).'/app/startapp.php';

use Core\Router;
use Core\App;
use Core\Request;

Router::get('/',function($vars){
    redirect('/home');
});

#public pages for site visitors.

    Router::get('/home','Index.home');
    Router::get('/about','Index.about');
    Router::get('/contact','Index.Contact');
    Router::any('/blog','Index.blog');
    Router::get('/coments','Index.coments');

    #private pages for admins.
        Router::any('/login','Admin.login');
        Router::any('/logout','Admin.logout');
        Router::get('/dashbord','Admin.dashbord');
        Router::any('/settings','Admin.settings');
        Router::any('/add','Admin.add');
        Router::any('/edit','Admin.edit');
        Router::any('/delete','Admin.delete');


$app = new App(ROOT);
$app->run();