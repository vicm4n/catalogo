<section class="section">
    <div class="card">
        <div class="card-header">
            <h2>Edición <?=$idioma;?></h2>
        </div>
        <div class="card-body">
            <?=form_open_multipart(base_url('admin/recibegrupo'), $atributos);?>
                <?=form_hidden('id', $grupo->id);?>
                <?=form_hidden('lang', $lang);?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="nombre" class="form-label">Nombre</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <?=form_input($nombre);?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="texto" class="form-label">Introducción</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <?=form_textarea($texto);?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="texto" class="form-label">Semblanza</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <?=form_textarea($semblanza);?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary me-1 mb-1" type="submit">Editar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>