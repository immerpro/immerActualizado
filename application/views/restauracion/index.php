<!--INTERFAZ RENOVADA-->
<main class="col-sm-10 ml-sm-auto col-lg-8 pt-5" role="main">
    <div class="grid_3 grid_5">
        <h3 class="display-4 orange-text text-center">Restauraciòn Informaciòn</h3>
        <div style="height: 4vh"></div>

        <p class="lead">
            en esta seccion podra ver la informacion que esta inactiva y tendra la opcion 
            de activarla nuevamente por favor dar click sobre los modulos que desee ver
            por ejemplo si quiero ver las categorias eliminadas dar click sobre 
            categorìa y se desplegara la informaciòn solicitada
        </p>
        <div class="but_list">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#categoria" id="categoria-tab" role="tab" data-toggle="tab" aria-controls="categoria" aria-expanded="true" class="orange-text bold">Categoria</a></li>
                    <li role="presentation"><a href="#sub" role="tab" id="subcategoria-tab" data-toggle="tab" aria-controls="subcategoria" class="green-text"> Subcategoria</a></li>
                    <li role="presentation"><a href="#producto" role="tab" id="producto-tab" data-toggle="tab" aria-controls="producto" class="green-text">Producto</a></li>
                    <li role="presentation"><a href="#proveedor" role="tab" id="proveedor-tab" data-toggle="tab" aria-controls="proveedor" class="orange-text">Proveedor</a></li>
                    <li role="presentation" class="dropdown">
                        <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" ><span class="orange-text">Colaboradores</span> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                            <li><a href="#registrados" tabindex="-1" role="tab" id="registrados-tab" data-toggle="tab" aria-controls="registrados">Registrados</a></li>
                            <li><a href="#activos" tabindex="-1" role="tab" id="activos-tab" data-toggle="tab" aria-controls="activos">Activos</a></li>
                        </ul>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="categoria" aria-labelledby="categoria-tab">
                        <div class="card-body">
                            <?php if ($listadoCategoriaDel): ?>
                                <table class="table table-bordered table-hover ">
                                    <thead class="table-inverse">
                                        <tr>
                                            <th>Categorìa</th>
                                            <th>Detalle</th>
                                            <th>Activar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach ($listadoCategoriaDel as $listadoCat): ?>
                                                <td><?= $listadoCat['NombreCategoria'] ?></td>
                                                <td><?= $listadoCat['detalles'] ?></td>
                                                <td>
                                                    <a class="grey-text"  title="activar" href=" <?php echo base_url() . 'reestablecer/activoCategoria/' . $listadoCat['idCategoria'] ?>" ><i class="fa fa-check-circle-o fa-3x" ></i></a>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>

                                </table>
                            <?php else: ?>
                                <p class="lead well">
                                    no hay categorias eliminadas
                                </p>   
                            <?php endif; ?>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="sub" aria-labelledby="subcategoria-tab">
                        <div class="card-body">
                            <?php if ($listadosubcategoria): ?>
                                <table class="table table-bordered table-hover ">
                                    <thead class="table-inverse">
                                        <tr>
                                            <th>SubCategorìa</th>
                                            <th>Detalle</th>
                                            <th>Activar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach ($listadosubcategoria as $listadosubcat): ?>
                                                <td><?= $listadosubcat['NombreSubcategoria'] ?></td>
                                                <td><?= $listadosubcat['detallesSub'] ?></td>
                                                <td>
                                                    <a class="grey-text"  title="activar" href=" <?php echo base_url() . 'reestablecer/activarsubcategoria/' . $listadosubcat['idSubcategoria'] ?>" ><i class="fa fa-check-circle-o fa-3x" ></i></a>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>

                                </table>
                            <?php else: ?>
                                <p class="lead well">
                                    no hay subcategorias inactivas 
                                </p>   
                            <?php endif; ?>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in " id="producto" aria-labelledby="producto-tab">
                        <div class="card-body">
                            <?php if ($listadoproducto): ?>
                                <table class="table table-bordered table-hover ">
                                    <thead class="table-inverse">
                                        <tr>
                                            <th>Producto</th>
                                            <th>Detalle</th>
                                            <th>Activar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach ($listadoproducto as $listapro): ?>
                                                <td><?= $listapro['NombreProducto'] ?></td>
                                                <td><?= $listapro['DescripcionProducto'] ?></td>
                                                <td>
                                                    <a class="grey-text"  title="activar" href=" <?php echo base_url() . 'reestablecer/activarproducto/' . $listapro['idProducto'] ?>" ><i class="fa fa-check-circle-o fa-3x" ></i></a>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>

                                </table>
                            <?php else: ?>
                                <p class="lead well">
                                    no hay productos inactivos 
                                </p>   
                            <?php endif; ?>
                        </div>  
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="proveedor" aria-labelledby="proveedor-tab">
                        <div class="card-body">  <!--listadoproveedores-->
                            <?php if ($listadoproveedores): ?>
                                <table class="table table-bordered table-hover ">
                                    <thead class="table-inverse">
                                        <tr>
                                            <th>Telefono</th>
                                            <th>Nombre Proveedor</th>
                                            <th>Contacto</th>
                                            <th>Direccion</th>
                                            <th>Correo</th>
                                            <th>Activar</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach ($listadoproveedores as $listadoProvee): ?>
                                                <td><?= $listadoProvee['TelefonoProveedor'] ?></td>
                                                <td><?= $listadoProvee['NombreProveedor'] ?></td>
                                                <td><?= $listadoProvee['NombreContacto'] ?></td>
                                                <td><?= $listadoProvee['DireccionProveedor'] ?></td>
                                                <td><?= $listadoProvee['CorreoElectronicoProveedor'] ?></td>
                                                <td>
                                                    <a class="grey-text"  title="activar" href=" <?php echo base_url() . 'reestablecer/activoProveedor/' . $listadoProvee['idProveedor'] ?>" ><i class="fa fa-check-circle-o fa-3x" ></i></a>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>


                                    </tbody>

                                </table>
                            <?php else: ?>
                                <p class="lead well">
                                    no hay proveedores inactivos 
                                </p>   
                            <?php endif; ?>
                        </div>  
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="registrados" aria-labelledby="registrados-tab">
                        <div class="card-body">  <!--listadoproveedores-->
                            <h2 class="green-text text-center">Registrados</h2>
                            <?php if ($listadocolaborador): ?>
                                <table class="table table-bordered table-hover ">
                                    <thead class="table-inverse">
                                        <tr>
                                            <th>Usuario</th>
                                            <th>Nombre del Colaborador</th>
                                            <th>email</th>
                                            <th>Activar</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach ($listadocolaborador as $listacolabora): ?>
                                                <td><?= $listacolabora['NombreUsuario'] ?></td>
                                                <td><?= $listacolabora['nombreCompleto'] ?></td>
                                                <td><?= $listacolabora['email'] ?></td>

                                                <td>
                                                    <a class="grey-text"  title="activar" href=" <?php echo base_url() . 'reestablecer/activoColaborador/' . $listacolabora['idUsuario'] ?>" ><i class="fa fa-check-circle-o fa-3x" ></i></a>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>


                                    </tbody>

                                </table>
                            <?php else: ?>
                                <p class="lead well">
                                    no hay nuevos colaboradores registrados
                                </p>   
                            <?php endif; ?>
                        </div>  
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="activos" aria-labelledby="activos-tab">
                        <div class="card-body">  <!--listadoproveedores-->
                            <h2 class="green-text text-center">Activos</h2>
                            <?php if ($listadoactivos): ?>
                                <table class="table table-bordered table-hover ">
                                    <thead class="table-inverse">
                                        <tr>
                                            <th>Usuario</th>
                                            <th>Nombre del Colaborador</th>
                                            <th>email</th>
                                            <th>Inactivar</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach ($listadoactivos as $activo): ?>
                                                <td><?= $activo['NombreUsuario'] ?></td>
                                                <td><?= $activo['nombreCompleto'] ?></td>
                                                <td><?= $activo['email'] ?></td>

                                                <td>
                                                    <a class="badge badge-danger"  title="inactivar" href=" <?php echo base_url() . 'reestablecer/inactivoColaborador/' . $activo['idUsuario'] ?>" ><i class="fa fa-ban fa-2x white-text" ></i></a>

                                                </td>
                                            </tr>
                                        <?php endforeach; ?>


                                    </tbody>

                                </table>
                            <?php else: ?>
                                <p class="lead well">
                                    no hay colaboradores activos 
                                </p>   
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
