    <!-- Navbar --> 
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i> <span style="margin-left:10px;">Distritec S.A</span></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto" id="menu-derecha">

        </ul>
    </nav>
    
    <!-- Menu -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="./" class="brand-link text-center" style="">
            <img src="../../../../distritec_img/img_app/crud.png" class="elevation-4" alt="User Image" style="max-height: 25px; width: auto; margin-top: -10px; ">
            <span class="brand-text font-weight-light text-center" style="padding-left: 15px;"><b>Distritec S.A.</b></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="../../../../distritec_img/img_app/user.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION["name_distritec"]; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->         
                <li class="nav-header">PRODUCTOS</li>
                    <li class="nav-item">
                        <a href="../envases/" class="nav-link">
                            <i class="nav-icon fa fa-gear"></i>
                            <p>Envases</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../atomizadores/" class="nav-link">
                        <i class="nav-icon fa fa-gear"></i>
                        <p>
                        Bombas
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../desechables/" class="nav-link">
                        <i class="nav-icon fa fa-gear"></i>
                        <p>
                            Desechables
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../estibas/" class="nav-link">
                        <i class="nav-icon fa fa-gear"></i>
                        <p>
                            Estibas y Pisos
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../zootecnia/" class="nav-link">
                        <i class="nav-icon fa fa-gear"></i>
                        <p>
                            Zootecnia
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../embalajes/" class="nav-link">
                        <i class="nav-icon fa fa-gear"></i>
                        <p>
                            Embalajes
                        </p>
                        </a>
                    </li>
                </li>
                <li class="nav-header">OPCIONES</li>
                    <li class="nav-item">
                        <a href="../opciones/contrasena.php" class="nav-link">
                            <i class="nav-icon fa fa-power-off"></i>
                            <p>Cambiar Contraseña</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../../../modelo/sesion/logout.php" class="nav-link">
                            <i class="nav-icon fa fa-power-off"></i>
                            <p>Cerrar Sesión</p>
                        </a>
                    </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>