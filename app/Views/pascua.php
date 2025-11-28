<!DOCTYPE html>
<html>
<head>
<title>Información</title>
</head>
<body>

<h1>Bienvenidos a la información</h1>
<p>Sistema desarrollado con Codeigniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></p>
<p>Versión actual de PHP: <?=phpversion();?></p>
<p>Con plataforma de base de datos: <?=$plataforma;?> versión <?=$version;?></p>
<p>La hora del servidor es: <?=$myTime;?></p>
<p>La zona horaria es: <?=$zona;?></p>
<p>La variable post_max_size está definida así: <?=$post_max_size;?></p>
<p>La variable upload_max_filesize está definida así: <?=$upload_max_filesize;?>
<p>Nos visitas desde un <?=$so;?></p>
<p>Navegando através de <?=$agente;?></p>
<p>Esta página tardó {elapsed_time} en cargar</p>

</body>
</html> 