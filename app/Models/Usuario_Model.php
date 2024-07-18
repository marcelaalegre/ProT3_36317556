<?php
namespace App\Models;
use CodeIgniter\Model;

class Usuario_Model extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'Id_usuarios';
    protected $allowedFields = ['Nombre','Apellido','Usuario','Email','Pass','Perfil_id','Baja','Creadet_at'];
    
}