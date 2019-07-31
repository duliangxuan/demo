<?php
namespace web\controller;
use core\View;
use Gregwar\Captcha\CaptchaBuilder;
class Index{
    protected $view;
    public function __construct(){
        $this->view = new View();
    }
    public function index(){
        return $this->view->make('index')->with('version','版本1.0');
    }
    public function login(){
        dd($_SESSION);
        return $this->view->make('login');
    }
    public function captcha(){
        header('Content-type: image/jpeg');
        $builder = new CaptchaBuilder;
        $builder->build(200,50);
        $_SESSION['phrase'] = $builder->getPhrase();
        $builder->output();
    }
}