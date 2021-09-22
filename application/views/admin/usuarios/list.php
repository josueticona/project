<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Usuarios
            <small>Listado</small>
        </h1>
    </section>
    <section class="content">
        <div class="box box-soild">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>administrador/usuarios/add" class="btn btn-primary btn-flat"><span class="fa fa-plus">Agregar Usuario</span></a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered btn-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Email</th>
                                    <th>Usuario</th>
                                    <th>Rol</th>
                                    <th>opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($usuarios)):?>
                                    <?php foreach ($usuarios as $usuario):?>
                                <tr>
                                    <td><?php echo $usuario->idusuarios;?></td>
                                    <td><?php echo $usuario->nombres;?></td>
                                    <td><?php echo $usuario->apellidos;?></td>
                                    <td><?php echo $usuario->email;?></td>
                                    <td><?php echo $usuario->username;?></td>
                                    <td><?php echo $usuario->rol_id;?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-view-usuario" sdata-toggle="modal" d ata-target="#modal-default" value="<?php echo $usuario->idusuarios;?>">
                                                <span class="fa fa-search"></span>
                                            </button>

                                            <a href="<?php echo base_url()?>administrador/usuarios/edit/<?php echo $usuario->idusuarios;?>" class="btn btn-warning"><span class="fa fa-pencil">
                                            </span></a>

                                            <a href="<?php echo base_url();?>administrador/usuarios/delete/<?php echo $usuario->idusuarios;?>" class="btn btn-danger  btn-remove"><span class="fa fa-remove"></span></a>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Informacion de la Categoria</h4>
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