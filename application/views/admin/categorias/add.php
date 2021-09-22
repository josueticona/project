<div class="content-wrapper">
    <section class="content-header">
        <h1>
            CATEGORIAS
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
                        <form action= "<?php echo base_url();?>mantenimiento/categorias/store" method="POST">

                            <div class="form-group <?php echo !empty(form_error("nombre"))? 'has-error':'';?>">
                                <label for="nombre">NOMBRE</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo set_value("nombre");?>">
                            <?php echo form_error("nombre","<span class='help-block'>","</span>") ?>
                            </div>

                            <div class="form-group">
                                <label for="descripcion">DESCRIPCION</label>
                            <input type="text" class="form-control" id="descripcion"
                            name="descripcion">
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