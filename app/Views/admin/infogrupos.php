<section class="section">
    <div class="card">
        <div class="card-header">
            <h2><?=$info_es->nombre;?></h2>
        </div>
        <div class="card-body">
            <p><b>Texto introductorio</b></p>
            <?=$info_es->texto;?>
            <hr>
            <p><b>Semblanza</b></p>
            <?=$info_es->semblanza;?>
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
            <h2><?=$info_en->nombre;?></h2>
        </div>
        <div class="card-body">
            <p><b>Texto introductorio</b></p>
            <?=$info_en->texto;?>
            <hr>
            <p><b>Semblanza</b></p>
            <?=$info_en->semblanza;?>
            <hr>
            <p><b>Fecha de registro</b></p>
            <p><?=$info_en->alta;?></p>
            <hr>
            <p><b>Última actualización</b></p>
            <p><?=$info_en->actualiza;?></p>
        </div>
    </div>
</section>