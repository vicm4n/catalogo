<section class="section">
    <div class="card">
        <div class="card-header">
            Exposiciones
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Inicio</th>
                        <th>Fin</th>
                        <th>Anio</th>
                        <th>Imagen</th>
                        <th>Programa</th>
                        <th>Acciones</th>
                        <th>Elaboración</th>
                        <th>Actualización</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($expos as $laexpo) { ?>
                        <tr>
                            <td><?=$laexpo['id'];?></td>
                            <td><?=$laexpo['titulo'];?></td>
                            <td><?=$laexpo['inicio'];?></td>
                            <td><?=$laexpo['fin'];?></td>
                            <td><?=$laexpo['anio'];?></td>
                            <td><img src="<?=base_url('assets/img/exposiciones/'.$laexpo['imagen']);?>" class="img-thumbnail img-fluid" style="width:25%;"></td>
                            <td><?=$laexpo['programa'];?></td>
                            <td></td>
                            <td><?=$laexpo['estampa'];?></td>
                            <td><?=$laexpo['actualiza'];?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>