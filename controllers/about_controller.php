<?php

require_once('controllers/base_controller.php');

class AboutController extends BaseController
{
    function __construct()
    {
        $this->folder = 'about';
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