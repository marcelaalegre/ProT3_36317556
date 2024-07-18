<?php
namespace App\Controllers;
Use App\Models\Usuario_Model;
use CodeIgniter\Controller;

Class Usuario_Controller extends Controller {
    public function __construct(){
        helper(['form','url']);
    }

    public function create() {
        $dato['titulo'] = 'Registro';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/Usuario/registro');
        echo view('front/footer_view');
    }
    
    public function formValidation() {

        $input = $this->validate([
            'Nombre' => 'required|min_length[3]',
            'Apellido'=> 'required|min_length[3]|max_length[25]',
            'Usuario'=> 'required|min_length[3]',
            'Email'=> 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.Email]',
            'Pass'=> 'required|min_length[3]|max_length[10]',
        ],);
    
        $formModel = new Usuario_Model();
        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('front/head_view',$data);
            echo view('front/navbar_view');
            echo view('back/Usuario/registro',['validation' => $this->validator]);
            echo view('front/footer_view');
            
        } else {
            $formModel->save([
                'Nombre' => $this->request->getVar('Nombre'),
                'Apellido' => $this->request->getVar('Apellido'),
                'Usuario' => $this ->request->getvar('Usuario'),
                'Email' => $this ->request->getVar('Email'),
                'Pass' => password_hash($this->request->getVar('Pass'), PASSWORD_DEFAULT)
                //password_hash () crea un nuevo hash de contrasena usando un algoritmo de hash de unico sentido.
            ]);

            //Flashdata funciona solo en redirigir la funcion en el controlador en la vista de carga.
            session()->setFlashdata('success','Usuario registrado con exito');
            return $this->response->redirect('login');
        }
    }
}
   