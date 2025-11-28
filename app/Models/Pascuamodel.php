<?php

namespace App\Models;

use CodeIgniter\Model;

class Pascuamodel extends Model
{

    function getPlataforma()
    {
        $db = \Config\Database::connect();
        return $db->getPlatform();
    }

    function getVersion()
    {
        $db = \Config\Database::connect();
        return $db->getVersion();
    }

}