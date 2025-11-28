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
          <li><a class="nav-link scrollto" href="#teatro">Theater</a></li>
          <li><a class="nav-link scrollto" href="#danza">Dance</a></li>
          <li><a class="nav-link scrollto" href="#musica">Music</a></li>
          <li><a class="nav-link scrollto" href="#opera">Opera</a></li>
          <li><a class="nav-link scrollto" href="#literatura">Literature</a></li>
          <li><a class="nav-link scrollto" href="#artesvisuales">Visual Arts</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        &nbsp;&nbsp;<a href="<?=base_url('cambia/es');?>">es</a>&nbsp;&nbsp;/&nbsp;<b>en</b>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Artistic groups and exhibitions</h1>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <br />

    <!-- ======= Teatro Section ======= -->
    <section id="teatro" class="teatro">
      <div class="container">

        <div class="section-title">
          <h2><?=$disciplinas[1];?></h2>
        </div>

        <div class="row">
          <div class="col-sm-12 col-md-6" style="margin-bottom:30px">
            <figure class="figure">
              <img class="figure-img img-fluid rounded" src="<?=base_url('assets/img/'.$teatro[0]->imagen);?>" alt="<?=$teatro[0]->nombre;?>">
              <figcaption class="figure-caption">
                <h3><?=$teatro[0]->nombre;?></h3>
                <?=$teatro[0]->texto;?>
              </figcaption>
              <a href="<?=base_url('informacion/grupo/'.$teatro[0]->id);?>"><span class="infocultura">+info</span></a>
            </figure>
          </div>
          <div class="col-sm-12 col-md-6" style="margin-bottom:30px">
            <figure class="figure">
              <img class="figure-img img-fluid rounded" src="<?=base_url('assets/img/'.$teatro[1]->imagen);?>" alt="<?=$teatro[1]->nombre;?>">
              <figcaption class="figure-caption">
                <h3><?=$teatro[1]->nombre;?></h3>
                <?=$teatro[1]->texto;?>
              </figcaption>
            </figure>
            <a href="<?=base_url('informacion/grupo/'.$teatro[1]->id);?>"><span class="infocultura">+info</span></a>
          </div>
        </div>

      </div>
    </section><!-- End Teatro Section -->

    <!-- ======= Danza Section ======= -->
    <section id="danza" class="danza section-bg">
      <div class="container">

        <div class="section-title">
          <h2><?=$disciplinas[2];?></h2>
        </div>

        <div class="row">

          <div class="col-sm-12 col-md-4" style="margin-bottom:30px">
            <figure class="figure">
              <img class="figure-img img-fluid rounded" src="<?=base_url('assets/img/'.$danza[0]->imagen);?>" alt="<?=$danza[0]->nombre;?>">
              <figcaption class="figure-caption">
                <h3><?=$danza[0]->nombre;?></h3>
                <?=$danza[0]->texto;?>
              </figcaption>
            </figure>
            <a href="<?=base_url('informacion/grupo/'.$danza[0]->id);?>"><span class="infocultura">+info</span></a>
          </div>

          <div class="col-sm-12 col-md-4" style="margin-bottom:30px">
            <figure class="figure">
              <img class="figure-img img-fluid rounded" src="<?=base_url('assets/img/'.$danza[1]->imagen);?>" alt="<?=$danza[1]->nombre;?>">
              <figcaption class="figure-caption">
                <h3><?=$danza[1]->nombre;?></h3>
                <?=$danza[1]->texto;?>
              </figcaption>
            </figure>
            <a href="<?=base_url('informacion/grupo/'.$danza[1]->id);?>"><span class="infocultura">+info</span></a>
          </div>

          <div class="col-sm-12 col-md-4" style="margin-bottom:30px">
            <figure class="figure">
              <img class="figure-img img-fluid rounded" src="<?=base_url('assets/img/'.$danza[2]->imagen);?>" alt="<?=$danza[2]->nombre;?>">
              <figcaption class="figure-caption">
                <h3><?=$danza[2]->nombre;?></h3>
                <?=$danza[2]->texto;?>
              </figcaption>
            </figure>
            <a href="<?=base_url('informacion/grupo/'.$danza[2]->id);?>"><span class="infocultura">+info</span></a>
          </div>

        </div>

      </div>
    </section><!-- End Danza Section -->

    <!-- ======= Services Section ======= -->
    <section id="musica" class="musica">
      <div class="container">

        <div class="section-title">
          <h2><?=$disciplinas[3];?></h2>
        </div>

        <div class="row">

          <div class="col-sm-12 col-md-6 col-lg-3" style="margin-bottom:30px">
            <figure class="figure">
              <img class="figure-img img-fluid rounded" src="<?=base_url('assets/img/'.$musica[0]->imagen);?>" alt="<?=$musica[0]->nombre;?>">
              <figcaption class="figure-caption">
                <h3><?=$musica[0]->nombre;?></h3>
                <?=$musica[0]->texto;?>
              </figcaption>
            </figure>
            <a href="<?=base_url('informacion/grupo/'.$musica[0]->id);?>"><span class="infocultura">+info</span></a>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-3" style="margin-bottom:30px">
            <figure class="figure">
              <img class="figure-img img-fluid rounded" src="<?=base_url('assets/img/'.$musica[1]->imagen);?>" alt="<?=$musica[1]->nombre;?>">
              <figcaption class="figure-caption">
                <h3><?=$musica[1]->nombre;?></h3>
                <?=$musica[1]->texto;?>
              </figcaption>
            </figure>
            <a href="<?=base_url('informacion/grupo/'.$musica[1]->id);?>"><span class="infocultura">+info</span></a>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-3" style="margin-bottom:30px">
            <figure class="figure">
              <img class="figure-img img-fluid rounded" src="<?=base_url('assets/img/'.$musica[2]->imagen);?>" alt="<?=$musica[2]->nombre;?>">
              <figcaption class="figure-caption">
                <h3><?=$musica[2]->nombre;?></h3>
                <?=$musica[2]->texto;?>
              </figcaption>
            </figure>
            <a href="<?=base_url('informacion/grupo/'.$musica[2]->id);?>"><span class="infocultura">+info</span></a>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-3" style="margin-bottom:30px">
            <figure class="figure">
              <img class="figure-img img-fluid rounded" src="<?=base_url('assets/img/'.$musica[3]->imagen);?>" alt="<?=$musica[3]->nombre;?>">
              <figcaption class="figure-caption">
                <h3><?=$musica[3]->nombre;?></h3>
                <?=$musica[3]->texto;?>
              </figcaption>
            </figure>
            <a href="<?=base_url('informacion/grupo/'.$musica[3]->id);?>"><span class="infocultura">+info</span></a>
          </div>

        </div>
          
      </div>
    </section><!-- End Música Section -->

    <!-- ======= Ópera Section ======= -->
    <section id="opera" class="opera section-bg">
      <div class="container">

        <div class="section-title">
          <h2><?=$disciplinas[4];?></h2>
        </div>

        <div class="row">

          <div class="col-sm-12 col-md-6" style="margin-bottom:30px">
            <figure class="figure">
              <img class="figure-img img-fluid rounded" src="<?=base_url('assets/img/'.$opera[0]->imagen);?>" alt="<?=$opera[0]->nombre;?>">
              <figcaption class="figure-caption">
                <h3><?=$opera[0]->nombre;?></h3>
                <?=$opera[0]->texto;?>
              </figcaption>
              <a href="<?=base_url('informacion/grupo/'.$opera[0]->id);?>"><span class="infocultura">+info</span></a>
            </figure>
          </div>

          <div class="col-sm-12 col-md-6" style="margin-bottom:30px">
            <figure class="figure">
              <img class="figure-img img-fluid rounded" src="<?=base_url('assets/img/'.$opera[1]->imagen);?>" alt="<?=$opera[1]->nombre;?>">
              <figcaption class="figure-caption">
                <h3><?=$opera[1]->nombre;?></h3>
                <?=$opera[1]->texto;?>
              </figcaption>
              <a href="<?=base_url('informacion/grupo/'.$opera[1]->id);?>"><span class="infocultura">+info</span></a>
            </figure>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <section id="literatura" class="literatura">
      <div class="container">

        <div class="section-title">
          <h2><?=$disciplinas[5];?></h2>
        </div>

        <div class="row">

          <div class="col-sm-12 col-md-6" style="margin-bottom:30px">
            <figure class="figure">
              <img class="figure-img img-fluid rounded" src="<?=base_url('assets/img/'.$literatura[0]->imagen);?>" alt="<?=$literatura[0]->nombre;?>">
              <figcaption class="figure-caption">
                <h3><?=$literatura[0]->nombre;?></h3>
                <?=$literatura[0]->texto;?>
              </figcaption>
              <a href="<?=base_url('informacion/grupo/'.$literatura[0]->id);?>"><span class="infocultura">+info</span></a>
            </figure>
          </div>

          <div class="col-sm-12 col-md-6" style="margin-bottom:30px">
            <figure class="figure">
              <img class="figure-img img-fluid rounded" src="<?=base_url('assets/img/'.$literatura[1]->imagen);?>" alt="<?=$literatura[1]->nombre;?>">
              <figcaption class="figure-caption">
                <h3><?=$literatura[1]->nombre;?></h3>
                <?=$literatura[1]->texto;?>
              </figcaption>
              <a href="<?=base_url('informacion/grupo/'.$literatura[1]->id);?>"><span class="infocultura">+info</span></a>
            </figure>
          </div>

        </div>
      </div>
    </section>

    <section id="artesvisuales" class="artesvisuales">
      <div class="cnav d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
          <!--
          <div class="row">
            <div class="col-sm-12 col-md-6" style="margin-bottom: 20px; margin-top:20px;">
              <a href="<?=base_url('assets/docs/exposiciones_nacionales_2022-2024.pdf');?>"><span class="infocnav">National Exhibitions</span></a>
            </div>
            <div class="col-sm-12 col-md-6" style="margin-bottom: 20px; margin-top:20px;">
              <a href="<?=base_url('assets/docs/exposiciones_internacionales_2022-2024.pdf');?>"><span class="infocnav">International Exhibitions</span></a>
            </div>
          </div>
-->
        </div>
      </div>
    </section>

    <section id="inclusion" class="inclusion">
      <div class="container" class="align-middle">
        <div class="row justify-content-center">
          <div class="col-sm-12 col-md-4">
            <img src="<?=base_url('assets/img/'.$otros[0]->imagen);?>" class="img-fluid">
          </div>
          <div class="col-sm-12 col-md-4">
            <h3><?=$otros[0]->nombre;?></h3><br />
            <?=$otros[0]->texto;?><br />
            <a href="<?=base_url('informacion/grupo/'.$otros[0]->id);?>"><span class="infocultura">Cursos y talleres</span></a>
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
  <script src="<?=base_url('assets/vendor/php-email-form/validate.js');?>"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('assets/js/main.js');?>"></script>

</body>

</html>
