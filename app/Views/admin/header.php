<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Catálogo de la SGBA</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('admin/assets/css/bootstrap.css');?>">
    
    <link rel="stylesheet" href="<?=base_url('admin/assets/vendors/iconly/bold.css');?>">

    <link rel="stylesheet" href="<?=base_url('admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css');?>">
    <link rel="stylesheet" href="<?=base_url('admin/assets/vendors/bootstrap-icons/bootstrap-icons.css');?>">
    <link rel="stylesheet" href="<?=base_url('admin/assets/css/app.css');?>">

    <?php if(isset($css)) { 
        foreach($css as $c)
            echo '<link rel="stylesheet" href="'.base_url("assets/$c").'">';
        } if(isset($js)) { 
            foreach($js as $c)
                echo '<script src="'.base_url("admin/assets/$c").'"></script>';
        } ?>
    <link rel="shortcut icon" href="<?=base_url('admin/assets/images/favicon.svg');?>" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="<?=base_url('admin/assets/images/logo/logo_cultura_inbal.png');?>" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
            
                        <?php if($menu == 'inicio') { ?>
                            <li class="sidebar-item  active">
                        <?php } else { ?>
                            <li class="sidebar-item  ">
                        <?php } ?>
                            <a href="<?=base_url('admin/inicio');?>" class='sidebar-link'>
                                <i class="bi bi-house-fill"></i>
                                <span>Inicio</span>
                            </a>
                        </li>
             
                        <?php if($menu == 'grupos') { ?>
                            <li class="sidebar-item  active">
                        <?php } else { ?>
                            <li class="sidebar-item ">
                        <?php } ?>
                            <a href="<?=base_url('admin/grupos');?>" class='sidebar-link'>
                                <i class="bi bi-journal-album"></i>
                                <span>Grupos artísticos</span>
                            </a>
                        </li>
                        
                        <?php if($menu == 'listado') { ?>
                            <li class="sidebar-item  active">
                        <?php } else { ?>
                            <li class="sidebar-item ">
                        <?php } ?>
                            <a href="<?=base_url('admin/listadoproyectos');?>" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Proyectos</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
            <div class="page-heading">
                <h3>Catálogo de la SGBA</h3>
            </div>