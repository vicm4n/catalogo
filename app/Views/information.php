<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-GFS8RNC8QW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-GFS8RNC8QW');
  </script>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Instituto Nacional de Bellas Artes y Literatura</title>
  <meta content="Oferta de grupos artísticos y de exposiciones del INBAL" name="description">
  <meta content="Cultura, grupos artísticos, Teatro, Música, Orquesta, Danza, Literatura, Ópera" name="keywords">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/img/favicon.ico');?>">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
  <link href="<?=base_url('assets/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('assets/vendor/glightbox/css/glightbox.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('assets/vendor/swiper/swiper-bundle.min.css');?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('assets/css/style.css');?>" rel="stylesheet">
  <link href="<?=base_url('assets/css/catalogo.css');?>" rel="stylesheet">
  <link href="<?=base_url('assets/css/losgrids.css');?>" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <a href="<?=base_url();?>"><img src="<?=base_url('assets/img/logo_cultura_inbal.png');?>" alt="Instituto Nacional de Bellas Artes y Literatura" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="<?=base_url();?>">Catálogo</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url('#teatro"');?>">Theater</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url('#danza"');?>">Dance</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url('#musica"');?>">Music</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url('#opera"');?>">Opera</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url('#literatura"');?>">Literature</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url('#artesvisuales"');?>">Visual Arts</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        &nbsp;&nbsp;<a href="<?=base_url('cambia/es');?>">es</a>&nbsp;&nbsp;/&nbsp;<b>en</b>
      </div>

    </div>
  </header><!-- End Header -->
  
  <main id="main">

    <section class="info">
      <img src="<?=base_url('assets/img/'.$info->imagen);?>" alt="<?=$info->nombre;?>" style="width:100%">
      <div id="text">
        <h1><?=$info->nombre;?></h1>
      </div>
    </section>
    <?php if(!is_null($info->semblanza)) { ?>
      <section class="semblanza">
        <div class="container">
          <?=$info->semblanza;?>
        </div>
      </section>
    <?php } ?>
    <section class="proyectos">
      <div class="container">
        <?php if(!is_null($proyectos)){ ?>
          <div class="contenedor">
            <?php foreach($proyectos as $algo){ ?>
              <div class="elemento">
                <figure class="figure">
                  <?php if(is_null($algo->imagen)){ ?>
                    <img src="<?=base_url('assets/img/pba.jpg');?>" style="width:100%;">
                  <?php } else { ?>
                    <img src="<?=base_url('assets/img/'.$algo->imagen);?>" style="width:100%;">
                  <?php } ?>
                  <br />
                  <h3><?=$algo->programa;?></h3>
                  <br />
                  <?=$algo->texto;?>
                </figure>
              </div>
              <?php } ?>
          </div>
        <?php } ?>
      </div>
    </section>

    <section class="contacto section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Contacto</h2>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <?php foreach($contacto as $contact){ ?>
              <p class="text-center">
                <b><?=$contact->nombre;?></b><br /><br />
                <?php 
                  if(!is_null($contact->cargo)) 
                    echo $contact->cargo."<br /><br />"; 
                  if(!is_null($contact->correo))
                    echo $contact->correo."<br /><br />";
                  if(!is_null($contact->website))
                    echo "<a href='".$contact->website."'><span class='infocultura'>".$website."</span></a><br /><br />";
                ?>
              </p><br />
            <?php } ?>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div id="elformulario">
                  <form id="myForm" method="post" role="form" class="php-email-form">
                    <input type="hidden" name="id_grupo" value="<?=$info->id;?>">
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="nombre" class="form-control" id="name" placeholder="<?=$nombre;?>" required>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="<?=$tucorreo;?>" required>
                      </div>
                    </div>
                    <div class="form-group mt-3">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="<?=$asunto;?>" required>
                    </div>
                    <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="5" placeholder="<?=$mensaje;?>" required></textarea>
                    </div>
                    <br />
                    <div class="text-center"><button type="submit" class="btn btn-primary"><?=$enviar;?></button></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 col-sm-12 footer-contact">
            <h3><a href="https://inba.gob.mx" target="_blank">Instituto Nacional de Bellas Artes y Literatura</a></h3>
            <p>
            Avenida Paseo de la Reforma y Campo Marte s/n,<br />
            Col. Polanco Chapultepec,<br />Alcaldía Miguel Hidalgo, C. P. 11560,<br />Ciudad de México<br /><br />
              <strong>Phone:</strong> +1 5255 1000 5600<br>
            </p>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 footer-links">
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.gob.mx/cultura" target="_blank">Secretaría de Cultura</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://palacio.inba.gob.mx" target="_blank">Palacio de Bellas Artes</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>INBAL</span></strong>. Derechos reservados
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/bellasartesinba" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.facebook.com/INBAmx" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/inbamx/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.youtube.com/user/bellasartesmex" class="youtube"><i class="bi bi-youtube"></i></a>
        <a href="https://www.tiktok.com/@inbalmx" class="tiktok"><i class="bi bi-tiktok"></i></a>
        <a href="https://www.threads.net/@inbamx" class="tiktok"><i class="bi bi-threads"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=base_url('assets/vendor/purecounter/purecounter_vanilla.js');?>"></script>
  <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?=base_url('assets/vendor/glightbox/js/glightbox.min.js');?>"></script>
  <script src="<?=base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js');?>"></script>
  <script src="<?=base_url('assets/vendor/swiper/swiper-bundle.min.js');?>"></script>
  <script src="<?=base_url('assets/vendor/waypoints/noframework.waypoints.js');?>"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('assets/js/main.js');?>"></script>

</body>

</html>
