<?php

namespace App\Controllers;
use Core;
use Core\Request;
use Core\Session;

class Index extends Core\Controller
{
    public function home($parms)
    {
        $table = $this->model('Articles');

        $data['title']    = 'home page.';
        $data['pagename'] = 'Home';
        $data['action'] = '/home';
        $data['user'] = Session::get('user');
        $data['articles'] = $table->getArticlesByRules(3);
        $data['defualt_img'] = 'img/logo.jpg';
        return $this->view('home',$data);
    }

    public function about($parms)
    {
        $data['title']    = 'about me';
        $data['pagename'] = 'About';
        $data['action'] = '/about';
        $data['user'] = Session::get('user');
        $data['text'] = json_decode(file_get_contents('../Config/settings.json'))->about->text;
        return $this->view('about',$data);
    }

    public function blog($prams)
    {
        $table = $this->model('Articles');

        $data['title']    = 'blog page';
        $data['pagename'] = 'Blog';
        $data['action'] = '/blog';
        $data['admin'] = true;
        $data['user'] = Session::get('user');
        $data['articles'] = $table->allArticles();
        $data['defualt_img'] = 'img/logo.jpg';
        return $this->view('blog',$data);
    }

    public function contact($parms)
    {
        $data['title']    = 'contact';
        $data['pagename'] = 'Contact';
        $data['contact']  = json_decode(file_get_contents(CONFIG.'settings.json'))->contact;
        $data['user'] = Session::get('user');
        return view('contact',$data);
    }

    public function coments($parms)
    {
        $data['title']    = 'coments';
        $data['pagename'] = 'Coments';
        $data['logo']     = 'img/logo.jpg';
        $data['user'] = Session::get('user');
        return $this->view('coments',$data);
    }

    
}