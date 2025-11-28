<section class="section">
    <div class="card">
        <div class="card-header">
            <h2>Edición</h2>
        </div>
        <div class="card-body">
            <?=form_open_multipart(base_url('admin/recibeprograma'), $atributos);?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="programa_es" class="form-label">Nombre del programa (español)</label>
                        </div>
                        <div class="col-md-6 form-group">
                            <?=form_input($programa_es);?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="programa_en" class="form-label">Nombre del programa (inglés)</label>
                        </div>
                        <div class="col-md-6 form-group">
                            <?=form_input($programa_en);?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="grupo" class="form-label">Grupo</label>
                        </div>
                        <div class="col-md-6 form-group">
                            <?=form_dropdown('grupo', $grupos, 0, $grupos_js);?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary me-1 mb-1" type="submit">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>