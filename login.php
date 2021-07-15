<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="views/dist/img/tower.png"/>
  <title id="name_title"></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="views/plugins/iCheck/square/blue.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition " background="views/dist/img/wallpaper_login.jpg" style="background-repeat: no-repeat; background-size: cover;">
<div class="login-box">
  <div class="login-logo">
    
    <a href="login.php">EMPRESA | <b>SISTEMA</b></a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Ingrese su nombre de usuario y contraseña.</p>
    <?php if ( isset($_GET['edo']) ): ?>
      <?php if ($_GET['edo'] == 'error'): ?>
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" onclick="tryAgain();">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Error! </h4>
                    <?=mb_strtoupper($_GET['e_message'],'utf-8')?>
                </div>
          </div>
        </div>
      <?php endif ?>
    <?php endif ?>
    <form action="controller/puente.php" method="post" >
      <input type="hidden" name="option" value="1">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email" name="username">
        <span class="fa fa-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <button type="submit" class="btn btn-success btn-block btn-flat">Iniciar sesión</button>
        </div>
        <div class="col-md-2"></div>
      </div>
    </form>
  </div>
</div>
<!-- jQuery 3 -->
<script src="views/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="views/plugins/iCheck/icheck.min.js"></script>
<script src="views/dist/js/all_events/main.login.js"></script>
</body>
</html>
