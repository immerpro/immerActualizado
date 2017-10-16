<div class="xs tabls">
    <div class="bs-example4" data-example-id="contextual-table">
        <h1 class="display-4 orange-text flex-center">Listado de SubCategorias</h1>
        <table class="table table-striped">
            <tr>
                <th>Nombre SubCategoria</th>
                <th>Detalle Subcategoria</th>
                <th>Nombre Categoria</th>
                <th>Opciones</th>

            </tr>
            <tr>
                <?php foreach ($categorias as $Subcategoria_item): ?>
                    <td><?php echo $Subcategoria_item['NombreSubcategoria']; ?></td>
                    <td><?php
                        echo $Subcategoria_item['detallesSub'];
                        echo br(3);
                        ?></td>
                    <td><?php
                        echo $Subcategoria_item['NombreCategoria'];
                        echo br(3);
                        ?></td>
                    <td> Modificar <a class="teal-text"  href=" <?php echo base_url() . 'SubCategoria/editarSub/' . $Subcategoria_item['idSubcategoria'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        Inactivar <a class="red-text"  href=" <?php echo base_url() . 'SubCategoria/modalSub/' . $Subcategoria_item['idSubcategoria'] ?>"><i class="fa fa-remove" aria-hidden="true"></i>
                        </a>
                    </td>


                </tr>


            <?php endforeach; ?>   

        </table>
    </div>
</div>