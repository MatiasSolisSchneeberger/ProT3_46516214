<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/componentes/head');
        echo view('front/secciones/navbar');
        echo view('front/secciones/heroSection');
        echo view('front/secciones/productos');
        echo view('front/secciones/footer');
    }
    
    public function productos()
    {
        echo view('front/componentes/head');
        echo view('front/secciones/navbar');
        echo view('front/componentes/productosTodos');
        echo view('front/secciones/footer');
    }

    public function iPhone16ProMax()
    {
        echo view('front/componentes/head');
        echo view('front/secciones/navbar');
        echo view('front/secciones/productoPresentacion');
        echo view('front/secciones/productos');
        echo view('front/secciones/footer');
    }

    public function sobreNosotros()
    {
        echo view('front/componentes/head');
        echo view('front/secciones/navbar');
        echo view('front/secciones/sobreNosotros');
        echo view('front/secciones/footer');
    }
    public function AcercaDe()
    {
        echo view('front/componentes/head');
        echo view('front/secciones/navbar');
        echo view('front/secciones/AcercaDe');
        echo view('front/secciones/footer');
    }
    public function Registrarse()
    {
        echo view('front/componentes/head');
        echo view('front/secciones/navbar');
        echo view('front/secciones/Registrarse');
        echo view('front/secciones/footer');
    }
    public function IniciarSesion()
    {
        echo view('front/componentes/head');
        echo view('front/secciones/navbar');
        echo view('front/secciones/IniciarSesion');
        echo view('front/secciones/footer');
    }


}
