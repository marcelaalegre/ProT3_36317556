<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Panel_Controller extends Controller
{
    public function index()
    {
        $session = session();
        $Nombre=$session->get('Usuario');
        $Perfil=$session->get('Perfil_id');

        $data['Perfil_id']=$Perfil;
        
        $dato['titulo']='panel del usuario';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('Back/Usuario/Usuario_Logueado',$data);
        echo view('front/footer_view');

    }
}
