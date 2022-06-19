<?php

require_once('controllers/base_controller.php');

class AbcController extends BaseController
{
    function __construct()
    {
        $this->folder = 'abc';
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
