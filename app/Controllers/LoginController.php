<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class LoginController extends BaseController{
    
    public function index(){
        helper(['form', 'url']);

        $dato['title'] = 'login';
        echo view('front/componentes/head', $dato);
        echo view('front/secciones/navbar');
        echo view('back/users/IniciarSesion');
        echo view('front/secciones/footer');
    }

    public function auth(){
        $session = session();
        $model = new UserModel();

        /* Traemos los datos del formulario */
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $model->where('email', $email)->first();
        /* compara el correo con el correo de la base de datos, y trae el primero */

        if($data){
            $pass = $data['password'];
            $baja = $data['baja'];

            /* Dar de baja */
            if($baja == 'SI'){
                $session->setFlashdata('msg', 'Usuario eliminado');
                return redirect()->to(base_url('IniciarSesion'));
            }

            /* Verificar contraseña */
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'last_name' => $data['last_name'],
                    'email' => $data['email'],
                    'nickname' => $data['nickname'],
                    'profile_id' => $data['profile_id'],
                    'isLoggedIn' => true,
                ];

                $session->set($ses_data);

                session()->setFlashdata('msg', 'Bienvenido');
                return redirect()->to(base_url('MiPerfil'));
            }else{
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to(base_url('IniciarSesion'));
            }
        }else{
            $session->setFlashdata('msg', 'Correo incorrecto');
            return redirect()->to(base_url('IniciarSesion'));
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('IniciarSesion'));
    }
}