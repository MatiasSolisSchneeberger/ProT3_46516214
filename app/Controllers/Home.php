<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Inicio';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/heroSection');
        echo view('front/secciones/productos');
        echo view('front/secciones/footer');
    }
    
    public function productos()
    {
        $data['titulo'] = 'Productos';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/componentes/productosTodos');
        echo view('front/secciones/footer');
    }

    public function iPhone16ProMax()
    {
        $data['titulo'] = 'iPhone 16 Pro Max';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/productoPresentacion');
        echo view('front/secciones/productos');
        echo view('front/secciones/footer');
    }

    public function sobreNosotros()
    {
        $data['titulo'] = 'Sobre Nosotros';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/sobreNosotros');
        echo view('front/secciones/footer');
    }
    public function AcercaDe()
    {
        $data['titulo'] = 'Acerca de';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/AcercaDe');
        echo view('front/secciones/footer');
    }
    public function Registrarse()
    {
        $data['titulo'] = 'Registrarse';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/Registrarse');
        echo view('front/secciones/footer');
    }
    public function IniciarSesion()
    {
        $data['titulo'] = 'Iniciar Sesión';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('front/secciones/IniciarSesion');
        echo view('front/secciones/footer');
    }


}
