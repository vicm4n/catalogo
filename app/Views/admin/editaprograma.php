<section class="section">
    <div class="card">
        <div class="card-header">
            <h2>Edición <?=$idioma;?></h2>
        </div>
        <div class="card-body">
            <?=form_open_multipart(base_url('admin/recibeproyectoedit'), $atributos);?>
                <?=form_hidden('id', $proyecto->id);?>
                <?=form_hidden('lang', $lang);?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="disciplina" class="form-label">Disciplna</label>
                        </div>
                        <div class="col-md-6 form-group">
                            <?=form_dropdown('id_disciplina', $disciplinas, $proyecto->id_disciplina, $disciplina_js);?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="grupo" class="form-label">Grupo</label>
                        </div>
                        <div class="col-md-6 form-group">
                            <?=form_dropdown('id_grupo', $grupos, $proyecto->id_grupo, $grupo_js);?>
                        </div>
                    </div>
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
                            <label for="texto" class="form-label">Información</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <?=form_textarea($texto);?>
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