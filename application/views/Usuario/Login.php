 <section id="intro" class="intro">
                <div class="intro-content">

       
                <?php echo form_open('ingresar'); ?>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="well well-trans">
                                <div class="wow fadeInDown" >
                                    <h2 class="h-ultra">Immerpro</h2>
                                </div>
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                                    <h4 class="h-light">Software de inventarios para minimercados</h4>
                                </div>
                                <div class="well well-trans">
                                    <div class="wow fadeInRight" data-wow-delay="0.1s">

                                        <ul class="lead-list">
                                            <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Sistema Minimercados</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
                                            <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Gestion de Inventario</strong><br />Sit zril sanctus scaevola ei, ea usu movet graeco</span></li>
                                            <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Facil Manejo</strong><br />Wisi lobortis eos ex, per at movet delectus, qui no vocent deleniti</span></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="col-lg-4" >
                            <div class="form-wrapper">
                                <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
                                </div>
                                <div class="panel panel-skin">
                                    <div class="panel-heading">
                                        <center><h3 class="panel-title "><span class="fa fa-pencil-square-o "></span> Iniciar Sesión </h3></center> 
                                    </div>
                                    <div class="panel-body">
                                        <div id="sendmessage">Your message has been sent. Thank you!</div>


                                       
                                            <center>
                                                <div class="row">
                                                    <div class="md-form">
                                                        <i class="fa fa-user fa-2x prefix" aria-hidden="true" ></i>
                                                        <input type="hidden" name="token" value="<?= $token ?>">
                                                        <input type="text" id="user" class="form-control" name="txtusuario" required="required">

                                                        <label for="user" >Usuario</label>
                                                    </div>
                                                    <div style="height: 2vh"></div>
                                                    <div class="md-form">
                                                        <i class="fa fa-lock fa-2x prefix" aria-hidden="true"></i>
                                                        <input type="password" id="pass" class="form-control" name="txtpassword" required="required">
                                                        <label for="pass" >Contraseña</label>
                                                    </div>
                                                    <input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">
                                                    <a class=" lead teal-text" href="<?php echo base_url() ?>olvido">Olvido su contraseña</a> 
                                                </div>

                                                </div>
                                     <div class="flex-center">
            <div class="alert-danger"><?php echo validation_errors(); ?></div> 
            <?php if ($this->session->flashdata('usuario_mal')): ?>
                <div class="alert alert-success"><?= $this->session->flashdata('usuario_mal') ?></div> 
            <?php endif; ?>
                                                </div>

<?php echo form_close(); ?>
                                                </section>