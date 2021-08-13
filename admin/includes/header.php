<?php
session_start();
$cedula = $_SESSION['cedula'];
if(!isset($cedula)){
  header("location: page-login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Yantacar-Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="dashboard.php">Yantacar</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.php"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="funciones/cerrar.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/usuario.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['usuario'] ?></p>
           <p class="app-sidebar__user-designation"><?php echo $_SESSION['cedula'] ?></p>
          <p class="app-sidebar__user-designation">Admin</p>
        </div>
      </div>
      <!--Panel del proyecto-->
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Vehiculos</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="page-marca.php"><i class="icon fa fa-circle-o"></i>Crear Marca</a></li>
            <li><a class="treeview-item" href="page-gmarca.php"><i class="icon fa fa-circle-o"></i>Gestionar Marca</a></li>
            <li><a class="treeview-item" href="page-vehiculo.php"><i class="icon fa fa-circle-o"></i> Publicar vehiculos</a></li>
            <li><a class="treeview-item" href="page-gvehiculo.php"><i class="icon fa fa-circle-o"></i> Gestionar vehiculos</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-address-book"></i><span class="app-menu__label">Clientes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="page-cliente.php"><i class="icon fa fa-circle-o"></i>Crear Cliente</a></li>
            <li><a class="treeview-item" href="page-gcliente.php"><i class="icon fa fa-circle-o"></i> Gestion de Cliente</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="page-greservas.php"><i class="app-menu__icon fa fa-user-plus"></i><span class="app-menu__label">Gestionar Reservas</span></a></li>    
        <li><a class="app-menu__item" href="page-alquiler.php"><i class="app-menu__icon fa fa-calendar-check-o"></i><span class="app-menu__label">Gestion Alquiler</span></a></li>
        <li><a class="app-menu__item" href="factura.php"><i class="app-menu__icon fa fa-window-maximize"></i><span class="app-menu__label">Facturas</span></a></li>
      </ul>
    </aside>