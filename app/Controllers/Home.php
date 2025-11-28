<?php

namespace App\Controllers;
use App\Models\Catalogomodel;

class Home extends BaseController
{
    public function index()
    {
        $model = new Catalogomodel();

        $session = session();
        $session->remove('lugar');
        $session->set('lugar', base_url(uri_string()));
        $language = $session->get('language');

        $data['disciplinas'] = $model->getDisciplinas($language);
        $data['teatro'] = $model->getGrupos(1, $language);
        $data['danza'] = $model->getGrupos(2, $language);
        $data['musica'] = $model->getGrupos(3, $language);
        $data['opera'] = $model->getGrupos(4, $language);
        $data['literatura'] = $model->getGrupos(5, $language);
        $data['otros'] = $model->getGrupos(7, $language);

        if($language == 'es')
            return view('inicio', $data);
        else
            return view('begin', $data);
    }
}