<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Inicio';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/heroSection');
        echo view('front/secciones/productos');
        echo view('front/secciones/footer');
    }
    
    public function productos()
    {
        $data['title'] = 'Productos';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/componentes/productosTodos');
        echo view('front/secciones/footer');
    }

    public function iPhone16ProMax()
    {
        $data['title'] = 'iPhone 16 Pro Max';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/productoPresentacion');
        echo view('front/secciones/productos');
        echo view('front/secciones/footer');
    }

    public function sobreNosotros()
    {
        $data['title'] = 'Sobre Nosotros';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/sobreNosotros');
        echo view('front/secciones/footer');
    }
    public function AcercaDe()
    {
        $data['title'] = 'Acerca de';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/AcercaDe');
        echo view('front/secciones/footer');
    }
    public function Registrarse()
    {
        $data['title'] = 'Registrarse';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('back/users/Registrarse');
        echo view('front/secciones/footer');
    }
    public function IniciarSesion()
    {
        $data['title'] = 'Iniciar Sesión';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('back/users/IniciarSesion');
        echo view('front/secciones/footer');
    }


}
