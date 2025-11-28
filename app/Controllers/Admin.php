<?php 

namespace App\Controllers;
 
use CodeIgniter\Controller;
use CodeIgniter\Files\File;
use App\Models\Adminmodel;
//use App\Models\Usermodel;
 
class Admin extends Controller {

    protected $helpers = ['form'];

    public function index()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to(base_url('usuario/login'));
        else
            return redirect()->to(base_url('admin/inicio'));
    }

    public function inicio()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to(base_url('usuario/login'));
        $datahead['menu'] = 'inicio';
        echo view('admin/header', $datahead);
        echo view('admin/inicio');
        echo view('admin/footer');
    }

    public function grupos()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to(base_url('usuario/login'));
        $model = new Adminmodel;
        $datahead['css'] = ['vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css', 'css/inbal/datatable.css'];
        $datahead['menu'] = 'grupos';
        $data['grupos'] = $model->getGrupos();
        $datafut['js'] = ['vendors/jquery/jquery.min.js', 'vendors/jquery-datatables/jquery.dataTables.min.js', 'vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js', 'js/inbal/datatable.js'];
        //echo "<pre>"; print_r($data['grupos']); echo "</pre>"; die();
        echo view('admin/header', $datahead);
        echo view('admin/listadogrupos', $data);
        echo view('admin/footer', $datafut);
    }

    public function ediciongrupo()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to(base_url('usuario/login'));
        $model = new Adminmodel;
        $lang = $this->request->uri->getSegment(3);
        $id = $this->request->uri->getSegment(4);
        if($lang == 'es')
            $data['idioma'] = 'Español';
        elseif($lang == 'en')
            $data['idioma'] = 'Inglés';
        else
            return redirect()->to(base_url('admin'));
        $datahead['menu'] = 'edit' . $lang;
        $datahead['css'] = ['vendors/summernote/summernote-lite.min.css'];
        $datahead['id'] = $id;
        $grupo = $model->getElGrupo($id, $lang);
        $data['grupo'] = $grupo;
        $data['lang'] = $lang;
        $data['nombre'] = array(
            'name'      => 'nombre',
            'id'        => 'nombre',
            'class'     => 'form-control',
            'type'      => 'text',
            'disabled'  => 'disabled',
            'value'     => $grupo->nombre
        );
        $data['texto'] = array(
            'name'      => 'texto',
            'id'        => 'texto',
            'class'     => 'form-control texto',
            'type'      => 'text',
            'value'     => $grupo->texto
        );
        $data['semblanza'] = array(
            'name'      => 'semblanza',
            'id'        => 'semblanza',
            'class'     => 'form-control semblanza',
            'type'      => 'text',
            'value'     => $grupo->semblanza
        );
        $data['atributos'] = array(
            'class' => 'form form-horizontal'
        );
        //echo "<pre>"; print_r($data['grupo']); echo "</pre>"; die();
        $datafut['js'] = ['vendors/jquery/jquery.min.js', 'vendors/summernote/summernote-lite.min.js', 'js/editor.js'];
        echo view('admin/header_grupo', $datahead);
        echo view('admin/grupos', $data);
        echo view('admin/footer', $datafut);
    }

    function nuevoprograma()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to(base_url('usuario/login'));
        $model = new Adminmodel;
        $data['grupos'] = $model->getGruposSelect();
        $data['grupos_js'] = array(
            'class'     => 'form-select',
            'id'        => 'grupo'
        );
        $datahead['menu'] = 'listado';
        $datahead['id'] = 1;
        $datahead['css'] = ['vendors/summernote/summernote-lite.min.css'];
        $data['programa_es'] = array(
            'name'      => 'programa_es',
            'id'        => 'programa_es',
            'class'     => 'form-control',
            'type'      => 'text',
            'required'  => 'required'
        );
        $data['programa_en'] = array(
            'name'      => 'programa_en',
            'id'        => 'programa_en',
            'class'     => 'form-control',
            'type'      => 'text',
            'required'  => 'required'
        );
        $data['atributos'] = array(
            'class' => 'form form-horizontal was-validated'
        );
        //echo "<pre>"; print_r($data['grupo']); echo "</pre>"; die();
        $datafut['js'] = ['vendors/jquery/jquery.min.js', 'vendors/summernote/summernote-lite.min.js', 'js/editor.js'];
        echo view('admin/header', $datahead);
        echo view('admin/nuevoprograma', $data);
        echo view('admin/footer', $datafut);
    }

    function recibegrupo()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to(base_url('usuario/login'));
        $model = new Adminmodel;
        $pro = $this->request->getPost();
        //echo "<pre>"; print_r($pro); echo "</pre>";
        $datos = array(
            'texto'     => $pro['texto'],
            'semblanza' => $pro['semblanza']
        );
        $model->updateGrupo($pro['id'], $pro['lang'], $datos);
        return redirect()->to(base_url('admin/infogrupo/'.$pro['id']));
    }
    
    function recibeprograma()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to(base_url('usuario/login'));
        $model = new Adminmodel;
        $pro = $this->request->getPost();
        //echo "<pre>"; print_r($pro); echo "</pre>";
        $id_disciplina = $model->getIdDisciplina($pro['grupo']);
        $datos_es = array(
            'id_disciplina' => $id_disciplina->id_disciplina,
            'id_grupo'      => $pro['grupo'],
            'programa'      => $pro['programa_es'],
            'publicado'     => 0
        );
        $datos_en = array(
            'id_disciplina' => $id_disciplina->id_disciplina,
            'id_grupo'      => $pro['grupo'],
            'programa'      => $pro['programa_en'],
            'publicado'     => 0
        );
        $model->insertPorgrama($datos_es, '_es');
        $model->insertPorgrama($datos_en, '_en');
        return redirect()->to(base_url('admin/listadoproyectos'));
    }

    function infogrupo()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to(base_url('usuario/login'));
        $model = new Adminmodel;
        $id = $this->request->uri->getSegment(3);
        $data['info_es'] = $model->infoGrupo($id, 'es');
        $data['info_en'] = $model->infoGrupo($id, 'en');
        $datahead['menu'] = 'info';
        $datahead['id'] = $id;
        echo view('admin/header_grupo', $datahead);
        echo view('admin/infogrupos', $data);
        echo view('admin/footer');
    }

    function fotogrupo()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to(base_url('usuario/login'));
        $model = new Adminmodel;
        $id = $this->request->uri->getSegment(3);
        $datahead['id'] = $id;
        $datahead['menu'] = 'imagen';
        $data['imagen'] = $model->fotoGrupo($id);
        $data['id']  = $id;
        echo view('admin/header_grupo', $datahead);
        echo view('admin/imagengrupo', $data);
        echo view('admin/footer');
    }

    function uploadimage()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to(base_url('usuario/login'));
        $model = new Adminmodel;
        $id = $this->request->getPost('id');
        $datahead['id'] = $id;
        $datahead['menu'] = 'imagen';

        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]'
                    . '|is_image[userfile]'
                    . '|mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[userfile,512]'
                    . '|max_dims[userfile,2000,2000]',
            ],
        ];
        if (! $this->validate($validationRule)) {
            
            $data = ['errors' => $this->validator->getErrors()];

            echo view('admin/header_grupo', $datahead);
            echo view('admin/imagenerror', $data);
            echo view('admin/footer');
        }

        $img = $this->request->getFile('userfile');

        if (! $img->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/' . $img->store();

            $data = ['uploaded_flleinfo' => new File($filepath)];

            echo "<pre>"; print_r($data['uploaded_flleinfo']); echo "</pre>"; die();

            $data['imagen'] = $model->fotoGrupo($id);
            echo view('admin/header_grupo', $datahead);
            echo view('admin/imagengrupo', $data);
            echo view('admin/footer');
        }
        $data = ['errors' => 'The file has already been moved.'];

        echo view('admin/header_grupo', $datahead);
        echo view('admin/imagenerror', $data);
        echo view('admin/footer');
    }

    public function listadoproyectos()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to(base_url('usuario/login'));
        $model = new Adminmodel;
        $datahead['css'] = ['vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css', 'css/inbal/datatable.css'];
        $datahead['menu'] = 'listado';
        $data['programas'] = $model->getProgramas();
        $datafut['js'] = ['vendors/jquery/jquery.min.js', 'vendors/jquery-datatables/jquery.dataTables.min.js', 'vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js', 'js/inbal/datatable.js'];
        //echo "<pre>"; print_r($data['grupos']); echo "</pre>"; die();
        echo view('admin/header', $datahead);
        echo view('admin/listadoprogramas', $data);
        echo view('admin/footer', $datafut);
    }

    public function infoproyecto()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to(base_url('usuario/login'));
        $model = new Adminmodel;
        $id = $this->request->uri->getSegment(3);
        $data['info_es'] = $model->getElPrograma($id, 'es');
        $data['info_en'] = $model->getElPrograma($id, 'en');
        $datahead['menu'] = 'info';
        $datahead['id'] = $id;
        echo view('admin/header_programa', $datahead);
        echo view('admin/infoproyectos', $data);
        echo view('admin/footer');
    }

    public function edicionproyecto()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to(base_url('usuario/login'));
        $model = new Adminmodel;
        $lang = $this->request->uri->getSegment(3);
        $id = $this->request->uri->getSegment(4);
        if($lang == 'es')
            $data['idioma'] = 'Español';
        elseif($lang == 'en')
            $data['idioma'] = 'Inglés';
        else
            return redirect()->to(base_url('admin'));
        $datahead['menu'] = 'edit' . $lang;
        $datahead['css'] = ['vendors/summernote/summernote-lite.min.css'];
        $datahead['id'] = $id;
        $proyecto = $model->getInfoPrograma($id, $lang);
        $data['proyecto'] = $proyecto;
        $data['disciplinas'] = $model->getDisciplinas($lang);
        $data['disciplina_js'] = array(
            'class'     => 'form-select',
            'id'        => 'disciplina',
            'disabled'  => 'disabled'
        );
        $data['grupos'] = $model->getGruposLang($lang);
        $data['grupo_js'] = array(
            'class'     => 'form-select',
            'id'        => 'grupo',
            'disabled'  => 'disabled'
        );
        $data['lang'] = $lang;
        $data['nombre'] = array(
            'name'      => 'nombre',
            'id'        => 'nombre',
            'class'     => 'form-control',
            'type'      => 'text',
            'disabled'  => 'disabled',
            'value'     => $proyecto->programa
        );
        $data['texto'] = array(
            'name'      => 'texto',
            'id'        => 'texto',
            'class'     => 'form-control texto',
            'type'      => 'text',
            'value'     => $proyecto->texto
        );
        $data['atributos'] = array(
            'class' => 'form form-horizontal'
        );
        //echo "<pre>"; print_r($data['grupo']); echo "</pre>"; die();
        $datafut['js'] = ['vendors/jquery/jquery.min.js', 'vendors/summernote/summernote-lite.min.js', 'js/editor.js'];
        echo view('admin/header_programa', $datahead);
        echo view('admin/editaprograma', $data);
        echo view('admin/footer', $datafut);
    }

    public function recibeproyectoedit()
    {
        if (!session()->get('isLoggedIn'))
            return redirect()->to(base_url('usuario/login'));
        $model = new Adminmodel;
        $pro = $this->request->getPost();
        $datos = array(
            'texto'     => $pro['texto'],
            'publicado' => TRUE
        );
        $model->updateProyecto($pro['id'], $pro['lang'], $datos);
        return redirect()->to(base_url('admin/infoproyecto/'.$pro['id']));
    }

}