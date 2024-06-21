<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {   
        echo view('front/header');
        echo view('front/navbar');
        echo view('front/index');
        echo view('front/footer');
    }
}
