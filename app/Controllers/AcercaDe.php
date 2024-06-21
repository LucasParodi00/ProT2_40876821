<?php

namespace App\Controllers;

class AcercaDe extends BaseController 
{
    public function vista()
    {
        echo view('front/header');
        echo view('front/navbar');
        echo view('front/acercaDe');
        echo view('front/footer');

    }
}