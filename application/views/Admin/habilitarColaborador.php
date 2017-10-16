<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>colabora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>public/easy/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>public/easy/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="<?php echo base_url() ?>public/easy/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <!-- lined-icons -->
    <link rel="<?php echo base_url() ?>public/easy/stylesheet" href="<?php echo base_url() ?>public/easy/css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <!-- chart -->
    <script src="<?php echo base_url() ?>public/easy/js/Chart.js"></script>
    <!-- //chart -->
    <!--animate-->
    <link href="<?php echo base_url() ?>public/easy/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="<?php echo base_url() ?>public/easy/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!----webfonts--->
    <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Meters graphs -->
    <script src="<?php echo base_url() ?>public/easy/js/jquery-1.10.2.min.js"></script>
    <!-- Placed js at the end of the document so the pages load faster -->

    <?php echo link_tag('public/css/mdb.min.css'); ?>
    <?php echo link_tag('public/jqueryUI/jquery-ui.min.css'); ?>
    <?php echo link_tag('public/alerta/themes/alertify.core.css'); ?>
    <?php echo link_tag('public/alerta/themes/alertify.default.css'); ?>
    <script type="text/javascript" src="<?PHP echo base_url() ?>public/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url() ?>public/js/parsley.min.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url() ?>public/js/es.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url() ?>public/alerta/lib/alertify.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url() ?>public/jqueryUI/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url() ?>public/js/push.min.js"></script>
</head>

<main class="col-sm-10 ml-sm-auto col-lg-8 pt-5" role="main">
<div class="col-md-9 widget_middle_left">
    <div class="online">
        <div style="height: 5vh"></div>

        <div style="width: 9vh"></div>
        <?php echo form_open('authCol'); ?>
        <div class="form-group">

            <?php if ($colaboradores): ?>
                <label for="selector1" class="col-sm-2 control-label"><i class="fa fa-users fa-3x prefix" aria-hidden="true" ></i>Colaborador</label>

                <select name="cboColabora" id="selector1" class="form-control1">
                    <option value="">- seleccione un colaborador-</option>
                    <?php foreach ($colaboradores as $lcolabora): ?>
                        <option value="<?= $lcolabora['idUsuario'] ?>"><?= $lcolabora['nombreCompleto'] ?></option>
                    <?php endforeach; ?>
                </select>
            <?php else: ?>
                <p class="lead">no hay colaboradores para ser habilitados.
                    Para <span class="label label-info">habilitar</span> al colaborador por favor dirijase
                    al <span class="label label-info">menu Restauración</span> y dar click en la <span class="label label-info"> pestaña usuarios Registrados</span>,
                    seleccione los colaboradores que desea habilitar para usar la aplicación</p>
            <?php endif; ?>


            <?php if ($colaboradores): ?>
                <button type="submit" class="btn btn-orange waves-effect orange" name="btnHabilita" ><i class='fa fa-send'></i> Habilitar Colaborador</button>
            <?php endif; ?>
        </div>

    </div>
</div>
</main>
<?php echo form_close(); ?>
