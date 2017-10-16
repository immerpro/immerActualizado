<body class="sticky-header left-side-collapsed "  onload="initMap()">
    <section>
        <!-- left side start-->
        <div class="left-side sticky-left-side green">

            <!--logo and iconic logo start-->
            <div class="logo">
                <h1><a href=""><img src="<?php echo base_url() ?>public/img/immerpro.png" alt="" width="120" height="50" /></h1>
            </div>
            <div class="logo-icon text-center">
                <a href="<?php echo site_url('admin') ?>"><i class="fa fa-home white-text"></i> </a>
            </div>

            <!--logo and iconic logo end-->
            <div class="left-side-inner green">

                <!--sidebar nav start-->
                <ul class="nav nav-pills nav-stacked custom-nav green ">
                    <li ><a href=""><i ></i><span></span></a></li>
                    <?php if ($this->session->userdata('rol') == 1): ?> 
                        <li class="menu-list green">
                            <a href="#"><i class="fa fa-suitcase"></i>
                                <span>Categoria</span></a>
                            <ul class="sub-menu-list">
                                <li><a href="<?php echo site_url('categoria/crear'); ?>">Nueva Categorìa</a> </li>
                                <li><a href="<?php echo site_url('categoria'); ?>">Listar Categorìa</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <li class="menu-list"><a href="#"><i class="fa fa-shopping-cart white-text"></i> <span>Producto</span></a>
                        <ul class="sub-menu-list">
                            <li><a href="<?php echo site_url('nuevoProducto'); ?>">Nuevo Producto</a> </li>
                            <li><a href="<?php echo site_url('producto'); ?>">Consultar Producto</a></li>
                        </ul>
                    </li>
                    <?php if ($this->session->userdata('rol') == 1): ?> 
                        <li class="menu-list"><a href="#"><i class="fa fa-user white-text"></i> <span>Proveedor</span></a>
                            <ul class="sub-menu-list">
                                <li><a href="<?php echo site_url('proveedor/NuevoProveedor'); ?>">Nuevo Proveedor</a> </li>
                                <li><a href="<?php echo site_url('proveedor'); ?>">Consultar </a> </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <li class="menu-list"><a href="#"><i class="fa fa-wrench white-text"></i> <span>Inventario</span></a>
                        <ul class="sub-menu-list">
                            <?php if ($this->session->userdata('rol') == 1): ?>
                                <li> <a  href="<?php echo site_url('Entrada'); ?>"> Orden Entrada</a></li>
                                <li>   <a  href="<?php echo site_url('Consultar'); ?>"> Consultar Orden Entrada</a></li>
                            <?php endif; ?>
                            <li> <a  href="<?php echo site_url('nuevaSalida'); ?>"> Orden Salida</a></li>
                            <li> <a  href="<?php echo site_url('BuscadorController/index'); ?>"> Consultar Orden Salida</a></li>
                            <?php if ($this->session->userdata('rol') == 1): ?>

                                <li>  <a  href="<?php echo site_url('ReporteController/mostrarreporte'); ?>"> Reporte</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <?php if ($this->session->userdata('rol') == 1): ?>
                        <li><a href="<?php echo site_url('recuperadato'); ?>"><i class="fa fa-spinner white-text"></i> <span>Restauración</span></a></li>
                        <?php endif; ?>
                </ul>
                <!--sidebar nav end-->
            </div>
        </div>
        <!-- left side end-->