<section class="section">
    <div class="card">
        <div class="card-header">
            <h2><?=$info_es->programa;?></h2>
        </div>
        <div class="card-body">
            <p><b>Información</b></p>
            <?=$info_es->texto;?>
            <hr>
            <p><b>Disciplina</b></p>
            <?=$info_es->disciplina_es;?>
            <hr>
            <p><b>Grupo artístico</b></p>
            <?=$info_es->nombre_es;?>
            <hr>
            <p><b>Fecha de registro</b></p>
            <p><?=$info_es->alta;?></p>
            <hr>
            <p><b>Última actualización</b></p>
            <p><?=$info_es->actualiza;?></p>
        </div>
    </div>
</section>

<section class="section">
    <div class="card">
        <div class="card-header">
            <h2><?=$info_en->programa;?></h2>
        </div>
        <div class="card-body">
            <p><b>Información</b></p>
            <?=$info_en->texto;?>
            <hr>
            <p><b>Disciplina</b></p>
            <?=$info_en->disciplina_en;?>
            <hr>
            <p><b>Grupo artístico</b></p>
            <?=$info_en->nombre_en;?>
            <hr>
            <p><b>Fecha de registro</b></p>
            <p><?=$info_en->alta;?></p>
            <hr>
            <p><b>Última actualización</b></p>
            <p><?=$info_en->actualiza;?></p>
        </div>
    </div>
</section>