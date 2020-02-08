<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col" style="background-color: #238276">
          <div class="left_col scroll-view" style="background-color: #238276">
            <div class="navbar nav_title" style="border: 0; background-color: #238276">
              <a href="index.php" class="site_title"><center id="centrado"><img src="images/cyklus.png" width="47%" id="logo"></center></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                  <img src="images/administrador.png" alt="..." width="" height="" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2> <?php echo" $Nombre " ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li>
                      <a href="index.php"><i class="fa fa-home"></i> Inicio</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Proyecto <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?php echo getUrl("Proyecto", "Proyecto", "getElegir");?>">Registrar proyecto</a></li> 

                        <li><a href="<?php echo getUrl("Proyecto", "Proyecto", "getProyecto") ?>">Listar proyectos</a></li>
                      
                    </ul>
                  </li>
                <li><a><i class="fa fa-desktop"></i> Requisitos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="<?php echo getUrl("Requisito", "Requisito", "CrearRequisitos") ?>">Crear requisito</a></li>
                      
                        <li><a href="<?php echo getUrl("Requisito", "Requisito", "getRequisitos") ?>">Listar Requisitos</a></li>
                        

                      <li><a href="inbox.html">Generar informe</a></li>
                    </ul>
                  </li>
				
                  <li><a><i class="fa fa-user"> </i> Usuarios <span class="fa fa-chevron-down"></span></a>
			<ul class="nav child_menu">
                            <li><a href="<?php echo getUrl("Usuario", "Usuario", "getCrearUsuario")?>"> Crear Usuario </a></li>
                            <li><a href="<?php echo getUrl("Usuario", "Usuario", "ListarUsuarios")?>"> Listar Usuarios </a></li>
                            <li><a href="<?php echo getUrl("Usuario", "Usuario", "CargaMasiva")?>"> Cargar Usuarios </a></li>
                        </ul>
                   </li>
                  
				  <li><a><i class="fa fa-table"></i> Cronograma <span class="fa fa-chevron-down"></span></a>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu" style="background-color: #fc7323">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle" data-valor="1" ><i class="fa fa-bars" style="color: white;"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/administrador.png" alt="" ><span style="color: white;"> <?php echo" $Nombre " ?> </span>&nbsp;
                    <span class=" fa fa-angle-down" style="color: white;"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="<?php echo getUrl("Usuario", "Usuario", "Config")?>"> Configurar perfil</a></li>

                    <li><a href="javascript:;">Ayuda</a></li>
                    <li><a href="Logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar sesi&oacute;n</a></li>
                  </ul>
                </li>
                
                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o" style="color: white;"></i>
                    <span class="badge bg-green">6</span>
                  </a>
               
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
