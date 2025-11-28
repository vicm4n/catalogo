<?php

namespace App\Models;

use CodeIgniter\Model;

class Usermodel extends Model
{
    /*protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user','correo', 'nombre', 'password', 'id_group', 'alta'];*/

    function auth($correo, $password)
    {
        $contra = hash( 'sha256', $password);
        $db = \Config\Database::connect();
        //return $db->table('users')->where('correo', $correo)->where('password', $contra)->countAllResults();
        $builder = $db->table('users');
        $builder->select('id, id_group, nombre, correo');
        $builder->where('correo', $correo);
        $builder->where('password', $contra);
        $builder->limit(1);
        $query = $builder->get();
        if($query->getNumRows() > 0)
            $result = $query->getRow();
        else
            $result = null;
        return $result;        
    }

    function bitacora($datos)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('logins');
        $builder->insert($datos);
    }

}