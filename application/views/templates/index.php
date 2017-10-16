

<section id="index" >
<style>
    .imagencard{
        width: 350px;
        height: 200px;
    }
</style>




    <div class="container">

        <!--Carousel Wrapper-->
      
        <!--/.Carousel Wrapper-->

        <br>

        

                    <!--Card content-->
                    
<center>
                    <div class="col-md-5">

                        <!-- Contact form -->

                        <form action="<?php base_url() ?>contacto" method="POST" data-parsley-validate>
                            
                            <div class="col-lg-30 ">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Digita tus datos <small>(es gratis!)</small></h3>
									</div>
									<div class="panel-body">
									    <div id="sendmessage">Gracias por escribirnos</div>
                                        <div id="errormessage"></div>
                                   
    					                <form action="" method="post" role="form" class="contactForm lead">
    										<div class="row">
    											<div class="col-xs-6 col-sm-6 col-md-6">
    												<div class="form-group">
    													<label>Nombre</label>
    													<input type="text" name="first_name" id="first_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                                                        <div class="validation"></div>
    												</div>
    											</div>
    											<div class="col-xs-6 col-sm-6 col-md-6">
    												<div class="form-group">
    													<label>Apellido</label>
    													<input type="text" name="last_name" id="last_name" class="form-control input-md" data-rule="minlen:3" data-msg="Please enter at least 3 chars">
                                                        <div class="validation"></div>
    												</div>
    											</div>
    										</div>

    										<div class="row">
    											<div class="col-xs-6 col-sm-6 col-md-6">
    												<div class="form-group">
    													<label>Correo</label>
    													<input type="email" name="email" id="email" class="form-control input-md" data-rule="email" data-msg="Please enter a valid email">
                                                        <div class="validation"></div>
    												</div>
    											</div>
    											<div class="col-xs-6 col-sm-6 col-md-6">
    												<div class="form-group">
    													<label>Numero de celular</label>
    													<input type="text" name="phone" id="phone" class="form-control input-md" data-rule="required" data-msg="The phone number is required">
                                                        <div class="validation"></div>
    												</div>
    											</div>
    										</div>
    										
    										<input  type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">
    										
    										<p class="lead-footer">*Recordamos que todos tus datos son confidenciales e importantes para nosotros</p>
    									
    									</form>
								</div>
							</div>				
						
						</div>
						</div>
					</div>	
                    <!--/Second column-->
                     <div class="row">
            <?php messages_flash('red',validation_errors(),'Errores del formulario', true);?>
        </div>

                </div>
               
            </section></center>
            <!--/Section: Contact v.1-->
        </div>
    </div>
</div>
