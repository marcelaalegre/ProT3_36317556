<?php
namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\Usuario_Model;

class Login_Controller extends baseController
{
    public function index()
    {
        helper(['form','url']);
        $dato['titulo']='Login';
        echo_view('front/head_view',$dato);
        echo_view('front/nabar_view');
        echo_view('Back/Usuario/login');
        echo_view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new Usuario_Model();
        //traemos los datos del formulario
        $email = $this->request->getvar('Email');
        $password = $this->request->getVar('Pass');

        $data = $model->where ('Email', $email)->first();
        if($data){
            $pass = $data['Pass'];
            $ba = $data['Baja'];
            if ($ba == 'SI'){
                $session->setFlashdata('msg','Usuario dado de baja');
                return redirect()->to('/Login_Controller');
            }
            //se verifican los datos ingresados para iniciar, si cumple la verificacion inicia la sesion 
        $verify_Pass = password_verify($password, $pass);
            //password_verify determina los requisitos de configuracion de la contraseña
            if ($verify_Pass){
              $ses_data=[
                'Id_usuarios'=>$data['Id_usuarios'],
                'Nombre'=>$data['Nombre'],
                'Apellido'=>$data['Apellido'],
                'Usuario'=>$data['Usuario'],
                'Email'=>$data['Email'],
                'Pass'=>$data['Pass'],
                'Perfil_id'=>$data['Perfil_id'],
                'logged_in'=> TRUE 
              ];
              //se cumple la verificacion inicia sesion
              $session->set ($ses_data);
              return redirect()->to('/panel');
              //return redirect()->to('/prueba');//pagina principal

            $ses_data = [
                'Id_usuarios' => $data['Id_usuarios'],
                'Nombre' => $data['Nombre'],
                'Apellido' => $data['Apellido'],
                'Email' => $data['Email'],
                'Usuario' => $data['Usuario'],
                'Perfil_id' => $data['Perfil_id'],
                'logged_in' => TRUE
            ];
            //se cumple la verificacion inicia la sesion
              $session->set($ses_data);

               session()->setFlashdata('msg', 'Bienvenido');
               return redirect()->to('/panel');
            //return redirect()->to('/prueba');//pagina princ
            }else{
                //no paso la validacion de la password
                $session->setFlashdata('msg','Contraseña incorrecta');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg','No existe el email o es incorrecto');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}