<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use app\Models\UserModel;

class login_controller extends BaseController{
    public function index(){
        helper(['form', 'url']);

        $dato['title'] = 'login';

        echo view('')
    }
}