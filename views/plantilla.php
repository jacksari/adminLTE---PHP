<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Sistema Inventario</title>

  

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="views/dist/css/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="views/dist/css/estilos.css">

  

  <link rel="apple-touch-icon" sizes="180x180" href="views/icon/apple-touch-icon.png">
  
  <link rel="icon" type="image/png" sizes="32x32" href="views/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="views/icon/favicon-16x16.png">
  <link rel="manifest" href="views/icon/site.webmanifest">
  <link rel="mask-icon" href="views/icon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="views/icon/favicon.ico">
  <meta name="msapplication-TileColor" content="#00aba9">
  <meta name="msapplication-config" content="views/icon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  
</head>
<body id="body-login" class="hold-transition sidebar-collapse sidebar-mini login-page">


  <!-- Navbar -->
  
  <?php

      if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {

        // <!-- Site wrapper -->
        echo '<div class="wrapper">';

        echo '<script>
            var login = document.getElementById("body-login");
            login.classList.remove("login-page");
            // console.log("123", login);
            </script>'; 
      // Header
        include "modules/header.php";

      // Sidebar
        include "modules/sidebar.php";

      // Contenido

        if(isset($_GET["ruta"])){
          if($_GET["ruta"] == "inicio" ||
              $_GET["ruta"] == "usuarios" ||
              $_GET["ruta"] == "categorias" ||
              $_GET["ruta"] == "productos" ||
              $_GET["ruta"] == "clientes" ||
              $_GET["ruta"] == "ventas" ||
              $_GET["ruta"] == "crear-venta" ||
              $_GET["ruta"] == "reportes" ||
              $_GET["ruta"] == "salir" 
          ){
            include "modules/".$_GET["ruta"].".php";
          }else{
            include "modules/404.php";
          }
        }else{
          include "modules/inicio.php";
        }

        echo '</div>';

      // include "modules/control_sidebar.php"
      }else{
        if(isset($_GET["ruta"])){
          if($_GET["ruta"] == "login" ){
            include "modules/login.php";
            }
          else if($_GET["ruta"] == "forgot-password" ){
            include "modules/forgot-password.php";
            }else{
              include "modules/login.php";
            }
        }else{
          include "modules/login.php";
        }


      }
  ?>






    
 

<!-- ./wrapper -->

<!-- jQuery -->
<script src="views/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="views/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="views/dist/js/demo.js"></script>
</body>
</html>
