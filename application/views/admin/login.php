<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Usuarios</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/AdminLTE.min.css">

</head>

<body background="fondo1.png">
    <div class="login-box">
        <div class="login-logo">
            <img src="logo2.png" width="500" height="130">

        </div>
        <!-- /.login-fondo blanco -->
            <img src="logo1.png" width="300" height="300" >
            <?php if($this->session->flashdata("error")):?>
              <div class="alert alert-danger">
              <p><?php echo $this->session->flashdata("error")?></p>
              </div>
            <?php endif;?>
            <form action="<?php echo base_url();?>auth/login" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Usuario" name="username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-danger" >Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/template/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/template/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
