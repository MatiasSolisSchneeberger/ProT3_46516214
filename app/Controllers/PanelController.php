<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class PanelController extends Controller{
    public function index(){
        $session = session();
        $name = $session->get('name');
        $profile_id = $session->get('profile_id');

        $data = ['profile_id' => $profile_id, 'name' => $name];
        $data['title'] = 'Panel de usuario';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('back/users/SesionIniciada', $data);
        echo view('front/secciones/footer');
    }
}