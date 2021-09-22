<div class="content-wrapper">
    <section class="content-header">
        <h1>
            CATEGORIAS
            <small>LISTADO</small>
        </h1>
    </section>
    <section class="content">
        <div class="box box-soild">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>mantenimiento/categorias/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"> AGREGAR CATEGORIA</span></a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered btn-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NOMBRE</th>
                                    <th>DESCRIPCION</th>
                                    <th>OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($categorias)):?>
                                    <?php foreach ($categorias as $categoria):?>
                                <tr>
                                    <td><?php echo $categoria->idcategorias;?></td>
                                    <td><?php echo $categoria->nombre;?></td>
                                    <td><?php echo $categoria->descripcion;?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $categoria->idcategorias;?>">
                                                <span class="fa fa-search"></span>
                                            </button>
                                            <a href="<?php echo base_url()?>mantenimiento/Categorias/edit/<?php echo $categoria->idcategorias;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                            <a href="<?php echo base_url();?>mantenimiento/categorias/delete/<?php echo $categoria->idcategorias; ?>" class="btn btn-danger  btn-remove"><span class="fa fa-remove"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">INFORMACION DE LA CATEGORIA</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->