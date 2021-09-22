<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        CLIENTES
        <small>EDITAR</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>mantenimiento/clientes/update" method="POST">
                            <input type="hidden" name="idcliente" value="<?php echo $cliente->idclientes;?>">
                           
                            <div class="form-group <?php echo !empty(form_error('nombres')) ? 'has-error':''?>">
                                <label for="nombre">NOMBRE</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $cliente->nombre;?>">
                                <?php echo form_error("nombre","<span class='help-block'>","</span>");?>
                            </div>
                            <div class="form-group">
                                <label for="tipocliente">TIPO DE CLIENTE</label>
                                <select name="tipocliente" id="tipocliente" class="form-control" required="required">
                                    <option value="">Seleccione...</option>
                                    <?php foreach ($tipoclientes as $tipocliente) :?>
                                       <?php if($tipocliente->id == $cliente->tipo_cliente_id):?>
                                            <option value="<?php echo $tipocliente->idtipo_cliente;?>" selected><?php echo $tipocliente->nombre ?></option>
                                        <?php else:?>
                                            <option value="<?php echo $tipocliente->idtipo_cliente;?>"><?php echo $tipocliente->nombre ?></option>
                                        <?php endif; ?>
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tipodocumento">TIPO DE DOCUMENTO</label>
                                <select name="tipodocumento" id="tipodocumento" class="form-control" required="required">
                                    <option value="">Seleccione...</option>
                                    <?php foreach ($tipodocumentos as $tipodocumento) :?>
                                        <?php if($tipodocumento->idtipo_documento == $cliente->tipo_documento_id):?>
                                            <option value="<?php echo $tipodocumento->idtipo_documento;?>" selected><?php echo $tipodocumento->nombre ?></option>
                                        <?php else:?>
                                            <option value="<?php echo $tipodocumento->idtipo_documento;?>"><?php echo $tipodocumento->nombre ?></option>
                                        <?php endif; ?>
                                        
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="numero">NUMERO DE DOCUMENTO:</label>
                                <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $cliente->num_documento;?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="telefono">TELEFONO</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $cliente->telefono;?>">
                            </div>
                            <div class="form-group">
                                <label for="direccion">DIRECCION</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $cliente->direccion;?>">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">GUARDAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
