<?php

namespace App\Models;

use CodeIgniter\Model;

class Adminmodel extends Model
{

    protected $table = 'grupo_es';

    public function getGrupos()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('grupo_es a');
        $builder->select('a.id, a.nombre, a.imagen, b.disciplina_es as disciplina, a.alta');
        $builder->join('disciplinas b', 'a.id_disciplina = b.id');
        $query = $builder->get();
        $i = 0;
        foreach($query->getResult() as $row)
            $result[$i++] = $row;
        return $result;
    }

    public function getProgramas()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('programas_es a');
        $builder->select('a.id, a.programa, a.imagen, a.texto, a.alta, b.disciplina_es as disciplina, c.nombre');
        $builder->join('disciplinas b', 'a.id_disciplina = b.id');
        $builder->join('grupo_es c', 'a.id_grupo = c.id');
        $query = $builder->get();
        $i = 0;
        foreach($query->getResult() as $row)
            $result[$i++] = $row;
        return $result;
    }

    public function getGruposSelect()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('grupo_es');
        $builder->select('id, nombre');
        $query = $builder->get();
        foreach($query->getResult() as $row)
            $result[$row->id] = $row->nombre;
        return $result;
    }

    public function getElGrupo($id, $lang)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('grupo_'.$lang);
        $builder->where('id', $id);
        $builder->limit(1);
        $query = $builder->get();
        $result = $query->getRow();
        if (isset($result))
            return $result;
        else
            return $result;
    }

    public function getElPrograma($id, $lang)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('programas_'.$lang . ' a');
        $builder->select('a.id, a.programa, a.texto, a.publicado, a.alta, a.actualiza, b.disciplina_es, b.disciplina_en, c.nombre as nombre_es, d.nombre as nombre_en');
        $builder->join('disciplinas b', 'a.id_disciplina = b.id');
        $builder->join('grupo_es c', 'a.id_grupo = c.id');
        $builder->join('grupo_en d', 'a.id_grupo = d.id');
        $builder->where('a.id', $id);
        $builder->limit(1);
        $query = $builder->get();
        $result = $query->getRow();
        if (isset($result))
            return $result;
        else
            return $result;
    }

    public function updateGrupo($id, $lang, $datos)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('grupo_'.$lang);
        $builder->where('id', $id);
        $builder->limit(1);
        $builder->update($datos);
    }

    public function infoGrupo($id, $lang)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('grupo_' .$lang. ' a');
        $builder->join('disciplinas b', 'a.id_disciplina = b.id');
        $builder->where('a.id', $id);
        $builder->limit(1);
        $query = $builder->get();
        $result = $query->getRow();
        if (isset($result))
            return $result;
        else
            return null;
    }

    public function getInfoPrograma($id, $lang)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('programas_'.$lang);
        $builder->select('id, id_disciplina, id_grupo, programa, texto, publicado');
        $builder->where('id', $id);
        $builder->limit(1);
        $query = $builder->get();
        $result = $query->getRow();
        if (isset($result))
            return $result;
        else
            return null;
    }

    public function fotoGrupo($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('grupo_es');
        $builder->select('nombre, imagen');
        $builder->where('id', $id);
        $builder->limit(1);
        $query = $builder->get();
        $result = $query->getRow();
        if (isset($result))
            return $result;
        else
            return null;
    }

    public function getIdDisciplina($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('grupo_es');
        $builder->select('id_disciplina');
        $builder->where('id', $id);
        $builder->limit(1);
        $query = $builder->get();
        $result = $query->getRow();
        if (isset($result))
            return $result;
        else
            return null;
    }

    public function insertPorgrama($datos, $lang)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('programas'.$lang);
        $builder->insert($datos);
    }

    public function getDisciplinas($lang)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('disciplinas');
        $builder->select('id, disciplina_'.$lang.' as disciplina');
        $query = $builder->get();
        foreach($query->getResult() as $row)
            $result[$row->id] = $row->disciplina;
        return $result;
    }

    public function getGruposLang($lang)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('grupo_'.$lang);
        $builder->select('id, nombre');
        $query = $builder->get();
        foreach($query->getResult() as $row)
            $result[$row->id] = $row->nombre;
        return $result;
    }

    public function updateProyecto($id, $lang, $data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('programas_'.$lang);
        $builder->where('id', $id);
        $builder->limit(1);
        $builder->update($data);
    }

}