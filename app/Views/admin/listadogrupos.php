<section class="section">
    <div class="card">
        <div class="card-header">
            Listado de proyectos
        </div>
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>Grupo</th>
                        <th>Disciplina</th>
                        <th>Imagen</th>
                        <th>Revisión</th>
                        <th>Alta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach($grupos as $algo) { ?>
                        <tr>
                            <td><?=$algo->nombre;?></td>
                            <td><?=$algo->disciplina;?></td>
                            <td><img src="<?=base_url('assets/img/'.$algo->imagen);?>" class="img-fluid" style="width:25%;"></td>
                            <td><a href="<?=base_url('admin/infogrupo/'.$algo->id);?>"><i class="bi bi-eye-fill"></i></a></td>
                            <td><?=$algo->alta;?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>