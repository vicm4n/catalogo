<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;
use App\Models\Pascuamodel;

class Pascua extends BaseController
{

    function index()
    {
        $model = new Pascuamodel();
        $datos['plataforma'] = $model->getPlataforma();
        $datos['version'] = $model->getVersion();
        $datos['myTime'] = new Time('now');
        $datos['post_max_size'] = ini_get('post_max_size');
        $datos['upload_max_filesize'] = ini_get('upload_max_filesize');

        //$versionci = CI_VERSION;

        $agent = $this->request->getUserAgent();

        if ($agent->isBrowser()) {
            $currentAgent = $agent->getBrowser() . ' ' . $agent->getVersion();
        } elseif ($agent->isRobot()) {
            $currentAgent = $agent->getRobot();
        } elseif ($agent->isMobile()) {
            $currentAgent = $agent->getMobile();
        } else {
            $currentAgent = 'Unidentified User Agent';
        }

        $datos['agente'] = $currentAgent;
        $datos['so'] = $agent->getPlatform();

        $datos['zona'] = date_default_timezone_get();

        echo view('pascua', $datos);
    }

}