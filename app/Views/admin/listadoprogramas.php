<section class="section">
    <div class="card">
        <div class="card-header">
            Listado de proyectos
        </div>
        <div class="card-body">
            <a class="btn btn-primary" href="<?=base_url('admin/nuevoprograma');?>" role="button" style="margin-bottom: 20px;">Agrega proyecto</a>
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>Programa</th>
                        <th>Grupo</th>
                        <th>Disciplina</th>
                        <th>Imagen</th>
                        <th>Revisión</th>
                        <th>Alta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach($programas as $algo) { ?>
                        <tr>
                            <td><?=$algo->programa;?></td>
                            <td><?=$algo->nombre;?></td>
                            <td><?=$algo->disciplina;?></td>
                            <?php
                                if(is_null($algo->imagen))
                                    $imagen = 'pba.jpg';
                                else
                                    $imagen = $algo->imagen;
                            ?>
                            <td><img src="<?=base_url('assets/img/'.$imagen);?>" class="img-fluid" style="width:25%;"></td>
                            <td><a href="<?=base_url('admin/infoproyecto/'.$algo->id);?>"><i class="bi bi-eye-fill"></i></a></td>
                            <td><?=$algo->alta;?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>