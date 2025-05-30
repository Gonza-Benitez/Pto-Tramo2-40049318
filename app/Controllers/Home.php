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
    
    public function pipas()
    {
        echo view('front/menu');
        echo view('front/pipas');
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

    public function tabacos()
    {
        echo view('front/menu');
        echo view('front/tabacos');
        echo view('front/footer');
    }

    public function filtros()
    {
        echo view('front/menu');
        echo view('front/filtros');
        echo view('front/footer');
    }

    public function papelillos()
    {
        echo view('front/menu');
        echo view('front/papelillos');
        echo view('front/footer');
    }

    public function cigarros()
    {
        echo view('front/menu');
        echo view('front/cortacigarros');
        echo view('front/footer');
    }

    public function ceni()
    {
        echo view('front/menu');
        echo view('front/ceniceros');
        echo view('front/footer');
    }

    public function encend()
    {
        echo view('front/menu');
        echo view('front/encendedores');
        echo view('front/footer');
    }

    public function abanos()
    {
        echo view('front/menu');
        echo view('front/abanos');
        echo view('front/footer');
    }

}
