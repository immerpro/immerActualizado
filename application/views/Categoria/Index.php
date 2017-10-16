<div class="main-content main-content4">

    <h1 class="display-4 orange-text flex-center">Listado de Categorias</h1>
    <div style="height: 5vh"></div> 
    <div class="form-inline flex-center">
        <div class="row">
            <?php echo form_open('CategoriaController'); ?>
            <div class="form-group">
                <label class="col-md-5 control-label">Producto</label>
                <div class="col-md-11">
                    <div class="input-group in-grp1">
                        <span class="input-group-addon">
                            <i class="fa fa-search"></i>
                        </span>
                        <input type="text" class="form-control1" name="txtbuscar" id="buscar" required="required" data-parsley-required="true">

                    </div>
                </div>
                <div class="col-md-11 flex-center">
                    <button class="btn btn-orange" type="submit"> <i class="fa fa-search"></i> Buscar</button>

                </div>

                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <div style="height: 5vh"></div>
    
    <div class="panel panel-success" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
            <h2></h2>
            <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
            <?php echo $div1 . $table; ?>
        </div>
    </div>
</div>


<?php echo form_close(); ?>
    
