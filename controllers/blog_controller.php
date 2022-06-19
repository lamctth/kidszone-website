<?php

require_once('controllers/base_controller.php');

class BlogController extends BaseController
{
    function __construct()
    {
        $this->folder = 'blog';
    }

    public function home()
    {
        $this->render('home');
    }

    public function error()
    {
        $this->render('error');
    }
}