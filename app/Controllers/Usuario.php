<?php 

namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Usermodel;
 
class Usuario extends Controller {

    public function alta()
    {
        helper(['form']);
        $data = [];
        echo view('usuario/registro' , $data);
    }

    public function guarda()
    {

    }

    public function login()
    {
        helper(['form']);
        echo view('usuario/login');
    }

    public function auth()
    {
        $session = session();
        $model = new Usermodel();
        $correo = $this->request->getVar('correo');
        $password = $this->request->getVar('password');
        $data = $model->auth($correo, $password);
        //echo "<pre>"; print_r($data); echo "</pre>"; die();
        if(!is_null($data))
        {
            $ses_data = array(
                'id'            => $data->id,
                'id_group'      => $data->id_group,
                'nombre'        => $data->nombre,
                'correo'        => $data->correo,
                'isLoggedIn'    => TRUE
            );
            $session->set($ses_data);
            $agent = $this->request->getUserAgent();
            $bitacora = array(
                'id_user'   => $data->id,
                'ip'        => $this->request->getIPAddress(),
                'navegador' => $agent->getBrowser() . ' ' . $agent->getVersion(),
                'so'        => $agent->getPlatform()
            );
            $model->bitacora($bitacora);
            return redirect()->to(base_url('/admin/inicio'));
        }
        else{
            $session->setFlashdata('msg', 'Datos incorrectos');
            return redirect()->to(base_url('usuario/login'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('usuario/login'));
    }

}