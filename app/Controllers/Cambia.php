<?php

namespace App\Controllers;

class Cambia extends BaseController
{

    function es()
    {
        $session = session();
        $newdata = array(
            'language'  => 'es',
            'iniciada'  => TRUE
        );
        $session->set($newdata);
        return redirect()->to($session->get('_ci_previous_url'));

    }

    function en()
    {
        $session = session();
        $newdata = array(
            'language'  => 'en',
            'iniciada'  => TRUE
        );
        $session->set($newdata);
        return redirect()->to($session->get('_ci_previous_url'));
    }

}