<?php

require_once('controllers/base_controller.php');

class ContactController extends BaseController
{
    function __construct()
    {
        $this->folder = 'contact';
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
