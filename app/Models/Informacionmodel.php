<?php

namespace App\Models;

use CodeIgniter\Model;

class Informacionmodel extends Model
{

    protected $table = 'programas_es';

    public function getInfo($id, $lang)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('grupo_' .$lang. ' a');
        $builder->select('id, nombre, semblanza, texto, imagen');
        $builder->where('id', $id);
        $builder->limit(1);
        $query = $builder->get();
        $result = $query->getRow();
        if (isset($result))
            return $result;
        else
            return null;
    }

    public function getProyectos($id_grupo, $lang)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('programas_'.$lang );
        $builder->select('programa, imagen, texto');
        $builder->where('id_grupo', $id_grupo);
        $builder->where('publicado', TRUE);
        $query = $builder->get();
        //echo $db->getLastQuery();
        $i = 0;
        if($query->getNumRows() > 0)
            foreach($query->getResult() as $row)
                $result[$i++] = $row;
        else
            $result = null;
        return $result;
    }

    function getContacto($id_grupo, $language)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('contacto');
        $builder->select('id, nombre, correo, website, cargo_'.$language.' as cargo');
        $builder->where('id_grupo', $id_grupo);
        $query = $builder->get();
        $i = 0;
        if($query->getNumRows() > 0)
            foreach($query->getResult() as $row)
                $result[$i++] = $row;
        else
            $result = null;
        return $result;
    }

    function putComentario($datos)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('comentarios');
        $builder->insert($datos);
    }

}