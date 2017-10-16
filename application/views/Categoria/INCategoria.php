<div style="height: 9vh"></div>
<h1 class="h1-responsive text-center orange-text">Bienvenido
    Administrador(a) <?php echo $perfil->nombreCompleto; ?> </h1>


<main class="col-sm-10 ml-sm-auto col-md-12 pt-3" role="main">

    <div class="col_1">
        <div class="col-md-10 span_10">
            <div class="activity_box">

                <div class="col-xs-3 activity-img"><img
                        src='<?PHP echo base_url(); ?>/public/img/woman_market_2.jpg' class="img-responsive"
                        alt=""/></div>
                <div class="panel-body panel-body-inputin">
                    <form role="form" class="form-horizontal" action="<?PHP echo base_url(); ?>CategoriaController/InCategoria">

                        <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-10">
                                <div class="input-group in-grp1">

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Categoria</label>
                            <div class="col-md-10">
                                <div class="input-group in-grp1">
                                    <span class="input-group-addon">
                                        <i class="fa fa-suitcase"></i>
                                    </span>
                                    <input type="text" class="form-control1" name="NombreCategoria" required="required">

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Detalle de Categoria</label>
                            <div class="col-md-10">
                                <div class="input-group input-icon right in-grp1">
                                    <span class="input-group-addon">
                                        <i class="fa fa-pencil"></i>
                                    </span>
                                    <div class="col-sm-10"><textarea name="txtdetalle" required="required" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
                                </div>
                            </div>
                            <div class="col-sm-2 jlkdfj1">
                                <p class="help-block"></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="btn-group flex-center">           
                            <button type="submit" class="btn btn-orange waves-effect orange" name="btnNuevaCategoria" > <i class="fa fa-play"> </i> Crear Categoria</button>
                        </div>
                        <?php echo form_close(); ?>
                </div>

            </div>
            <div class="clearfix"></div>
            <div class="flex-center">
                <div style="height: 5vh"></div>
                <?php if ($this->session->flashdata('correcto')): ?>
                    <div class="alert alert-success" role="alert" /> <?= $this->session->flashdata('correcto') ?> </div>  
            <?php endif; ?>
            <?php if ($this->session->flashdata('incorrecto')): ?>
                <div class="alert alert-success" role="alert" /> <?= $this->session->flashdata('incorrecto') ?> </div>  
        <?php endif; ?>
    </div>
</div>
</div>
</main>
