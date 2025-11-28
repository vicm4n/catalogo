<?php 

namespace App\Controllers;
 
use CodeIgniter\Controller;
use CodeIgniter\Files\File;
use App\Models\Informacionmodel;
//use App\Models\Usermodel;
 
class Informacion extends BaseController {

    public function grupo()
    {
        $session = session();
        $session->remove('lugar');
        $session->set('lugar', base_url(uri_string()));
        $language = $session->get('language');

        $model = new Informacionmodel;
        $uri = $this->request->getUri();
        $id = $uri->getSegment(3);
        $info = $model->getInfo($id, $language);
        $proyectos = $model->getProyectos($id, $language);
        $contacto = $model->getContacto($id, $language);
//      echo "<pre>"; print_r($contacto); echo "</pre>"; die();
        $data['grupo'] = $info->nombre;
        $data['info'] = $info;
        $data['proyectos'] = $proyectos;
        $data['contacto'] = $contacto;
        if($language == 'es')
        {
            $data['nombre'] = 'Nombre';
            $data['tucorreo'] = 'Correo electrónico';
            $data['asunto'] = 'Asunto';
            $data['mensaje'] = 'Mensaje';
            $data['enviar'] = 'Enviar';
            $data['website'] = 'Página web';
            return view('informacion', $data);
        }
        else
        {
            $data['nombre'] = 'Your Name';
            $data['tucorreo'] = 'Your Email';
            $data['asunto'] = 'Subject';
            $data['mensaje'] = 'Message';
            $data['enviar'] = 'Send Message';
            $data['website'] = 'Web Site';
            return view('information', $data);
        }
    }

    public function comentarios()
    {
        $model = new Informacionmodel;
        $info = $this->request->getPost();
        $datos = array(
            'id_grupo'      => $info['id_grupo'],
            'nombre'        => $info['nombre'],
            'email'         => $info['email'],
            'asunto'        => $info['subject'],
            'mensaje'       => $info['message']
        );
        $model->putComentario($datos);
        return view('formulario');
    }

}