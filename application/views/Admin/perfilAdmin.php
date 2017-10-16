<div style="height: 9vh"></div>
<h1 class="h1-responsive text-center orange-text">Bienvenido
    Administrador(a) <?php echo $perfil->nombreCompleto; ?> </h1>


<main class="col-sm-10 ml-sm-auto col-md-12 pt-3" role="main">

    <div class="col_1">
        <div class="col-md-10 span_10">
            <div class="activity_box">

                <div class="col-xs-3 activity-img"><img
                            src='<?PHP echo base_url(); ?>/public/img/woman-1594711_1920.jpg' class="img-responsive"
                            alt=""/></div>
                <div class="panel-body panel-body-inputin">
                    <form role="form" class="form-horizontal" action="<?PHP echo base_url(); ?>AtualizarPerfil">
                        <input type="hidden" name="idUsuario" value="<?= $this->session->userdata('idUsuario') ?>">
                        <p class="badge badge-orange">Rol</p>
                        <p><?= $mrol->tipoRol ?><br><br>
                        <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-10">
                                <div class="input-group in-grp1">

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Usuario</label>
                            <div class="col-md-10">
                                <div class="input-group in-grp1">
						<span class="input-group-addon">
							<i class="fa fa-user"></i>
						</span>
                                    <input type="text" class="form-control1" name="txtusuario"
                                           value="<?php echo $perfil->NombreUsuario; ?>">

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nombre Completo</label>
                            <div class="col-md-10">
                                <div class="input-group input-icon right in-grp1">
						<span class="input-group-addon">
							<i class="fa fa-users"></i>
						</span>
                                    <input class="form-control1" type="text" name="txtNombCompl"
                                           value="<?php echo $perfil->nombreCompleto; ?>">
                                </div>
                            </div>
                            <div class="col-sm-2 jlkdfj1">
                                <p class="help-block"></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Correo Electronico</label>
                            <div class="col-md-10">
                                <div class="input-group input-icon right in-grp1">
						<span class="input-group-addon">
							<i class="fa fa-envelope"></i>
						</span>
                                    <input id="email" type="text" class="form-control1" name="txtemail"
                                           value="<?php echo $perfil->email; ?>">
                                </div>
                            </div>
                            <div class="col-sm-2 jlkdfj1">
                                <p class="help-block"></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group flex-center">
                            <button type="submit" class="btn-warng1 btn orange" name="btnEditarPerfilAdmin"><i
                                        class='fa fa-edit'> </i>Actualizar Perfil
                            </button>

                        </div>

                        <?php echo form_close(); ?>
                </div>

            </div>
            <div class="clearfix"></div>

        </div>
    </div>
    <!--body wrapper start-->

    <!--body wrapper end-->


</main>
