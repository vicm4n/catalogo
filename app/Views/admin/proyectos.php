<section class="section">
    <div class="card">
        <div class="card-header">
            <h2>Alta de proyecto</h2>
        </div>
        <div class="card-body">
            <?=form_open_multipart(base_url('admin/recibeproyectos'), $atributos);?>
                <div class="form-body">
                    <div class="row">

                        <div class="col-md-2">
                            <label for="disciplina">Disciplina</label>
                        </div>
                        <div class="col-md-7 form-group">
                                <?=form_dropdown('id_disciplina', $disciplina, 1,$disci_class);?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="titulo">Título</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <textarea id="titulo" name="titulo" class="form-control"></textarea>
                        </div>
                    </div>
                    <!--
                    <div class="row">
                        <div class="col-md-2">
                            <label for="subtitulo">Subtítulo</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <textarea id="subtitulo" name="subtitulo" class="form-control"></textarea>
                        </div>
                    </div>
                    -->
                    <div class="row">
                        <div class="col-md-2">
                            <label for="intro">Introducción</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <textarea id="intro" name="intro" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="info">Información</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <textarea id="info" name="info" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="">Imagen</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <input type="file" name="userfile" >
                        </div>
                    </div>
                    <!--
                    <div class="row">
                        <div class="col-md-2">
                            <label for="contra">Contraseña</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <input id="contra" name="contrasenia" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="edicion">Edición</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <input id="edicion" name="edicion" class="form-control" type="text">
                        </div>
                    </div>
                    -->
                    <div class="row">
                        <div class="col-md-2">
                            <label for="anio">Año del proyecto</label>
                        </div>
                        <div class="col-md-7 form-group">
                            <input id="anio" name="anio" class="form-control" type="number" value="<?=date("Y");?>">
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