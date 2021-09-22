<div class="content-wrapper">
    <section class="content-header">
        <h1>
            PRODUCTOS
            <small>NUEVO</small>
        </h1>
    </section>
<section class="content">
    <div class="box box-soild">
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <?php if($this->session->flashdata("error")):?> 
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                        </div>
                    <?php endif;?>
                        <form action= "<?php echo base_url();?>mantenimiento/productos/store" method="POST">
                            <div class="form-group <?php echo !empty(form_error('codigo'))? 'has-error':'';?>">
                                <label for="codigo">CODIGO</label>
                            <input type="text" class="form-control" id="codigo" 
                            name="codigo" value="<?php echo set_value('codigo');?>">
                            <?php echo form_error("codigo","<span class='help-block'>","</span>");?>
                            </div>

                            <div class="form-group <?php echo !empty(form_error('nombre'))? 'has-error':'';?>">
                                <label for="nombre">NOMBRE</label>
                            <input type="text" class="form-control" id="nombre" 
                            name="nombre" value="<?php echo set_value('nombre');?>">
                            <?php echo form_error("nombre","<span class='help-block'>","</span>");?>
                            </div>

                             <div class="form-group <?php echo !empty(form_error('descripcion'))? 'has-error':'';?>">
                                <label for="descripcion">DESCRIPCION</label>
                            <input type="text" class="form-control" id="descripcion" 
                            name="descripcion" value="<?php echo set_value('descripcion');?>">
                            <?php echo form_error("descripcion","<span class='help-block'>","</span>");?>
                            </div>

                             <div class="form-group <?php echo !empty(form_error('precio'))? 'has-error':'';?>">
                                <label for="precio">PRECIO</label>
                            <input type="text" class="form-control" id="precio" 
                            name="precio" value="<?php echo set_value('precio');?>">
                            <?php echo form_error("precio","<span class='help-block'>","</span>");?>
                            </div>

                             <div class="form-group <?php echo !empty(form_error('stock'))? 'has-error':'';?>">
                                <label for="stock">STOCKk</label>
                            <input type="text" class="form-control" id="stock" 
                            name="stock" value="<?php echo set_value('stock');?>">
                            <?php echo form_error("stock","<span class='help-block'>","</span>");?>
                            </div>

                             <div class="form-group">
                                <label for="categoria">CATEGORIA</label>
                                <select name="categoria" id="categoria" class="form-control">
                                    <?php foreach($categorias as $categoria):?>
                                        <option value="<?php echo $categoria->idcategorias?>"><?php echo $categoria->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">GUARDAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>