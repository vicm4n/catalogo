<?php

namespace App\Models;

use CodeIgniter\Model;

class Catalogomodel extends Model
{

    protected $table = 'disciplinas';

    function getDisciplinas($language)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('disciplinas');
        $builder->select('id, disciplina_'.$language.' as disciplina');
        $query = $builder->get();
        foreach($query->getResult() as $row)
            $result[$row->id] = $row->disciplina;
        return $result;
    }

    function getGrupos($id_disciplina, $language)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('grupo_'.$language);
        $builder->select('id, nombre, imagen, texto');
        $builder->where('id_disciplina', $id_disciplina);
        $query = $builder->get();
        $i = 0;
        foreach($query->getResult() as $row)
            $result[$i++] = $row;
        return $result;
    }

}