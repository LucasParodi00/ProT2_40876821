<?php

namespace App\Controllers;

class QuienesSomos extends BaseController
{ 
    public function vista()
    {
        echo view('front/header');
        echo view('front/navbar');
        echo view('front/quienesSomos');
        echo view('front/footer');
    }
}