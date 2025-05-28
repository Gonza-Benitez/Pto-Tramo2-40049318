<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/menu');
        echo view('front/principal');
        echo view('front/footer');
    }
    public function ver()
    {
        echo view('front/menu');
        echo view('front/principal');
        echo view('front/footer');
    }
    public function somos()
    {
        echo view('front/menu');
        echo view('front/quienes_somos');
        echo view('front/footer');
    }
    public function acerca_de()
    {
        echo view('front/menu');
        echo view('front/contacto');
        echo view('front/footer');
    }
    public function comercio()
    {
        echo view('front/menu');
        echo view('front/comercializacion');
        echo view('front/footer');
    }
    
    public function productos()
    {
        echo view('front/menu');
        echo view('front/producto');
        echo view('front/footer');
    }
   
    public function terminos()
    {   
        echo view('front/menu');
        echo view('front/terminos_condiciones');
        echo view('front/footer');
    }

    public function consulta()
    {
        echo view('front/menu');
        echo view('front/consulta');
        echo view('front/footer');
    }

}
