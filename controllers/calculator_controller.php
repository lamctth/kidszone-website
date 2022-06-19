<?php

require_once('controllers/base_controller.php');

class CalculatorController extends BaseController
{
    function __construct()
    {
        $this->folder = 'calculator';
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
