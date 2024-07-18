<?php

namespace Config;

$routes = Services::Routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes('False');
$routes->set404Override();

$routes->get('/', 'Home::index');
$routes->get('principal_ultimo', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

/*rutas del Registro de Usuarios*/
$routes->get('/registro','Usuario_Controller::create');
$routes->post('/enviar-form','Usuario_Controller::formValidation');
/*
/*rutas de login*/
$routes->get('/login', 'Login_Controller');
$routes->post('/enviarlogin','Login_Controller::auth');
$routes->get('/panel', 'Panel_Controller::index',['filters'=>'auth']);
$routes->get('/logout', 'Login_Controller::logout');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/ROUTES.php')){
    require APPPATH . 'Config/' . ENVIRONMENT . '/ROUTES.php';
}