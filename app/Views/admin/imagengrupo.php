<section class="section">
    <div class="card">
        <div class="card-header">
            <h2><?=$imagen->nombre;?></h2>
        </div>
        <div class="card-body">
            <?php if(!is_null($imagen->imagen)) { ?>
                <img src="<?=base_url('assets/img/'.$imagen->imagen);?>" class="img-fluid">
            <?php } ?>
        </div>
    </div>
    <div class="card">

        <div class="card-header">
            <h3>Subir o sustituir archivo</h3>
        </div>

        <?=form_open_multipart(base_url('admin/uploadimage')) ?>

            <input type="hidden" name="id" value="<?=$id;?>">
            <input type="file" name="userfile" size="20" />

            <br /><br />

            <input type="submit" value="Cargar" />

            <br /><br />

        </form>
    </div>
</section>