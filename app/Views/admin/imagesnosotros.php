<section class="section">
    <div class="card">
        <div class="card-header">
            Carrusel de imágenes en sección Acerca de nosotros
        </div>
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>Núm.</th>
                        <th>Imagen</th>
                        <th>Descripción</th>
                        <th>Estado</th>
                        <th>Borrar</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach($imagenes as $algo) { ?>
                        <tr>
                            <td><?=$i++;?></td>
                            <td><img src="<?=base_url('assets/img/lagaleria/'.$algo->imagen);?>" class="img-thumbnail"  style="width:30%;"></td>
                            <td><?=$algo->descripcion;?></td>
                            <td>
                                <?php if($algo->id_status == 1) { ?>
                                    <span class="badge bg-success"><?=$algo->status;?></span>
                                <?php } else { ?>
                                    <span class="badge bg-danger"><?=$algo->status;?></span>
                                <?php } ?>
                            </td>
                            <td><i class="bi bi-trash-fill"></i></td>
                            <td><?=$algo->estampa;?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>