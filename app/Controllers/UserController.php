<?php
namespace App\Controllers;
Use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller{
    public function __constructo(){
        helper(['form', 'url']);
    }



    public function create(){
        $data['titulo'] = 'Registro';
        echo view('front/componentes/head', $data);
        echo view('front/secciones/navbar');
        echo view('/back/users/Registrarse.php');
        echo view('front/componentes/footer');
    }

    public function formValidation(){
        $input = $this->validate([
            'name' => 'required|min_length[3]',
            'last_name' => 'required|min_length[3]',
            'nickname' => 'required|min_length[3]|is_unique[user.nickname]',
            'email' => 'required|min_length[3]|max_length[100]|valid_email|is_unique[user.email]',
            'password' => 'required|min_length[8]',
        ]);

        $formModel = new UserModel();

        if(!$input){
            $data['title'] = 'Registro';
            echo view('front/componentes/head', $data);
            echo view('front/secciones/navbar');
            echo view('back/users/Registrarse', ['validation' => $this->validator]);
            echo view('front/secciones/footer');
        } else {
            $formModel->save([
                'name' => $this->request->getVar('name'),
                'last_name' => $this->request->getVar('last_name'),
                'nickname' => $this->request->getVar('nickname'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ]); 
            session()->setFlashdata('success', 'Usuario registrado con exito');
            return $this->response->redirect('/IniciarSesion');
        }
    }
}