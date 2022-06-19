<?php

require_once('controllers/base_controller.php');

class ShopController extends BaseController
{
    function __construct()
    {
        $this->folder = 'shop';
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
