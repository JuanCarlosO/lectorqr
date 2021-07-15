<header class="main-header">
    <!-- Logo -->
    <a href="index.php?menu=general" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>NÓM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>NÓMINA</b>UAI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="view/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs name-person"> <?=$_SESSION['name'];?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="view/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  <label class="name-person"> <?=$_SESSION['n_completo']?> </label>
                  <?php if ( $_SESSION['perfil'] == 'SIRA' ): ?>
                  <small>Perfil: SIS</small>
                  <?php else: ?>
                  <small>Perfil: <?=mb_strtoupper($_SESSION['perfil'],'utf-8');?></small>
                  <?php endif ?>
                  
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="login.php" class="btn btn-danger btn-flat">CERRAR SESIÓN</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>