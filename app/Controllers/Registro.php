<?php

namespace App\Controllers;

class Registro extends BaseController 
{
    public function vista()
    {
        echo view('front/header');
        echo view('front/navbar');
        echo view('front/registro');
        echo view('front/footer');
        
    }

    public function vistaLogin() 
    {
        echo view('front/header');
        echo view('front/navbar');
        echo view('front/login');
        echo view('front/footer');


    }
}