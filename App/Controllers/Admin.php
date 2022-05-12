<?php

namespace App\Controllers;
use Core;
use Core\Request;
use Core\Session;

class Admin extends Core\Controller
{
    private function getSettings(string $path)
    {
        $file = $path.".json";

        if ( file_exists($file) ):
            return json_decode(file_get_contents($file));
        endif;
        return [];
    }

    private function chick_user()
    {
        if (!Session::has('user')) $this->redirect('/login');
    }


    public function login($prams)
    {
        if ( Request::method() == 'POST' ):
            $email = Request::post('email');
            $password = Request::post('password');
            $search = $this->model('Users')->tryLogin($email,$password);

            if ($search->rowCount()) {
                Session::start();
                Session::set('user',$search->fetch());

                $this->redirect('/');
            } 
            $data['error'] = (true)? 'هناك مشكلة في ال Email الخص بك' : 'هناك مشكلة في Password الخص بك' ;

        endif;

        $data["title"]    = "Login page";
        $data["pagename"] = "login";
        $data['action']   = "/login";
        $data['error'] =  null;
        return $this->view("login",$data);
    }

    public function logout($prams)
    {
        Session::remove('user');
        $this->redirect('/');
    }

    public function dashbord($prams)
    {
        $this->chick_user();
        $data['title'] = 'dashbord';
        $data['pagename'] = 'Dashbord';
        $data['action'] = '/dashbord';
        $data['user'] = Session::get('user');
        return $this->view("dashbord",$data);
    }

    public function settings($prams)
    {
        $this->chick_user();
        if ( Request::method() == 'POST' ):
            
            $settings['contact'] = Request::post('contact');
            file_put_contents(CONFIG.'settings.json',json_encode($settings));
            $this->redirect('/settings');
        endif;

        $data["title"]    = "Settings page";
        $data["pagename"] = "Settings";
        $data['action'] = '/settings';
        $data['user'] = Session::get('user');
        $data['settings'] = $this->getSettings(CONFIG."settings");
        return $this->view("settings",$data);
    }

    public function add ($prams)
    {
        $this->chick_user();
        $table = $this->model('Articles');

        if (Request::method() == 'POST' ):
            
            $img     = Request::upload_file('img',UPLOADS.'images'.DS);
            $title   = Request::post('title');
            $content = Request::post('content');

            $table->addArticle($title,$content,$img);

            $this->redirect('/add');
        endif;


        $data['title']    = 'admin pages';
        $data['pagename'] = 'Add Article';
        $data['action'] = '/add';
        $data['user'] = Session::get('user');
        $data['defualt_img'] = 'img/logo.jpg';
        return $this->view('make-article',$data);
    }

    public function edit ($prams)
    {
        $this->chick_user();
        $table = $this->model('Articles');

        if (Request::method() == 'POST' ):

            $id       = Request::post('id');
            $title    = Request::post('title');
            $content  = Request::post('content');
            $img      = (Request::files('img')['tmp_name'])? Request::upload_file('img',UPLOADS.'images'.DS) : Request::post('old_img');
            
            $table->editArticle($id,$title,$content,$img);

            $this->redirect('/blog');
        endif;

        $data['title']    = 'admin pages';
        $data['pagename'] = 'Edit Article';
        $data['action']  = '/edit';
        $data['user'] = Session::get('user');
        $data['old'] = $table->getArticleById(Request::get('id'));
        $data['defualt_img'] = 'img/logo.jpg';
        return $this->view('make-article',$data);
    }

    public function delete($prams)
    {
        $this->chick_user();
        $this->model('articles')->removeArticle(Request::get('id'));
        redirect('/blog');
    }    
}