<?php

$server = "localhost";
$usuario = "root";
$contraseña = "fermarc2018";
$bd = "mydb_school";

$conexion = mysqli_connect ($server, $usuario, $contraseña, $bd)
or die("error en la conexion a la base de datos");



      //   mysqli_query($conexion, "DELETE  from users_form where USER_ID ='$USER_ID'")
        //       or die("Error al Eliminar");


mysqli_close($conexion);
echo "empresa";


?> 



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Language" content="en" />
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="theme-color" content="#4188c9">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
  <!-- Generated: 2018-04-16 09:29:05 +0200 -->
  <title>ESSystem-Perfil-Familia</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
  <script src="./assets/js/require.min.js"></script>
  <script>
    requirejs.config({
      baseUrl: '.'
    });
  </script>
  <!-- Dashboard Core -->
  <link href="./assets/css/dashboard.css" rel="stylesheet" />
  <script src="./assets/js/dashboard.js"></script>
  <!-- c3.js Charts Plugin -->
  <link href="./assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
  <script src="./assets/plugins/charts-c3/plugin.js"></script>
  <!-- Google Maps Plugin -->
  <link href="./assets/plugins/maps-google/plugin.css" rel="stylesheet" />
  <script src="./assets/plugins/maps-google/plugin.js"></script>
  <!-- Input Mask Plugin -->
  <script src="./assets/plugins/input-mask/plugin.js"></script>
</head>
<body class="">
  <div class="page">
    <div class="page-main">
      <div class="header py-4">
        <div class="container">
          <div class="d-flex">
            <a class="header-brand" href="./index.html">
              <img src="./demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">
            </a>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="nav-item d-none d-md-flex">
                <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>
              </div>
              <div class="dropdown d-none d-md-flex">
                <a class="nav-link icon" data-toggle="dropdown">
                  <i class="fe fe-bell"></i>
                  <span class="nav-unread"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                  <a href="#" class="dropdown-item d-flex">
                    <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/male/41.jpg)"></span>
                    <div>
                      <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                      <div class="small text-muted">10 minutes ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item d-flex">
                    <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/1.jpg)"></span>
                    <div>
                      <strong>Alice</strong> started new task: Tabler UI design.
                      <div class="small text-muted">1 hour ago</div>
                    </div>
                  </a>
                  <a href="#" class="dropdown-item d-flex">
                    <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/18.jpg)"></span>
                    <div>
                      <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                      <div class="small text-muted">2 hours ago</div>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                </div>
              </div>
              <div class="dropdown">
                <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                  <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span>
                  <span class="ml-2 d-none d-lg-block">
                    <span class="text-default">Sorlia Watson</span>
                    <small class="text-muted d-block mt-1">Administrator</small>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                  <a class="dropdown-item" href="#">
                    <i class="dropdown-icon fe fe-user"></i> Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="dropdown-icon fe fe-settings"></i> Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <span class="float-right"><span class="badge badge-primary">6</span></span>
                    <i class="dropdown-icon fe fe-mail"></i> Inbox
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="dropdown-icon fe fe-send"></i> Message
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="dropdown-icon fe fe-help-circle"></i> Need help?
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="dropdown-icon fe fe-log-out"></i> Sign out
                  </a>
                </div>
              </div>
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
              <span class="header-toggler-icon"></span>
            </a>
          </div>
        </div>
      </div>
      <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-3 ml-auto">
              <form class="input-icon my-3 my-lg-0">
                <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                <div class="input-icon-addon">
                  <i class="fe fe-search"></i>
                </div>
              </form>
            </div>
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="./index_02.php" class="nav-link active"><i class="fe fe-home"></i> Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Users</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./reg_Empresas.php" class="dropdown-item ">Companies</a>
                      <a href="./reg_Escuelas.php" class="dropdown-item ">Schools</a>
                      <a href="./reg_profesores.php" class="dropdown-item ">Teachers</a>
                      <a href="./reg_estudiantes.php" class="dropdown-item ">Student</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Components</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./maps.php" class="dropdown-item ">Maps</a>
                      <a href="./store.html" class="dropdown-item ">Store</a>
                      <a href="./blog.html" class="dropdown-item ">Blog</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i>Link</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="./profile.php" class="dropdown-item ">Profile</a>
                      <a href="./index.php" class="dropdown-item ">Login</a>
                      <a href="./register.php" class="dropdown-item ">Register</a>
                      <a href="./forgot-password.php" class="dropdown-item ">Forgot password</a>
                      <a href="./email.php" class="dropdown-item ">Email</a>
                      
                    </div>
                  </li>
                   
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="my-3 my-md-5">
          <div class="my-3 my-md-5">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <form action="https://httpbin.org/post" method="post" class="card">
                    <div class="card-header">
                      <h3 class="card-title">Form elements</h3>
                    </div>
                    <div class="card-body">
                      <div class="row">
                       <div class="col-md-4">
                        <fieldset class="form-fieldset">
                          <div class="form-group">

                            <table class="table table-stripe table-hover"><br>


                              <tr>
                               <th></th>
                               <th>ID Usuario</th>
                               <th>Parentesco</th>
                               <th>Nombre</th>
                               <th>Email</th>
                               <th>Registrado</th>
                             </tr>
                             <tr>
                               <td><img src="imagenes\profesor.jpg" width="100" height="115"></</td>
                               <td>ID00001 ST</td>
                               <td>Padre</td>
                               <td>Somhairle Watson</td>
                               <td>Somhairle Watson@gmail.com</td>
                               <td>Mayo 13, 2019</td>
                             </tr>
                             <tr>
                               <td>
                                <img src="imagenes\mama.jpg" width="100" height="115"></</td>
                                <td>ID 00002</td>
                                <td>Madre</td>
                                <td>Somhairle Watson I</td>
                                <td>Somhairle Watson@gmail.com</td>
                                <td>Mayo 13, 2019</td>
                              </tr>
                              <tr>
                               <td>
                                <img src="imagenes\abuela.jpg" width="100" height="115"></</td>
                                <td>ID 00003</td>
                                <td>Abuelos Maternos</td>
                                <td>Somhairle Watson II</td>
                                <td>Somhairle Watson@gmail.com</td>
                                <td>Mayo 13, 2019</td>
                              </tr>
                              <tr>
                               <td>
                                <img src="imagenes\hermana.jpg" width="100" height="115"></</td>
                                <td>ID 00005</td>
                                <td>hermanos</td>
                                <td>Somhairle Watson IV</td>
                                <td>Somhairle Watson@gmail.com</td>
                                <td>Mayo 13, 2019</td>
                              </tr> 
                            </table>
                          </div>
                        </div>

                      </div>
                    </div>
                      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">First link</a></li>
                    <li><a href="#">Second link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Third link</a></li>
                    <li><a href="#">Fourth link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Fifth link</a></li>
                    <li><a href="#">Sixth link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Other link</a></li>
                    <li><a href="#">Last link</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
              Premium and Open Source dashboard template with responsive and high quality UI. For Free!
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto">
              <div class="row align-items-center">
                <div class="col-auto">
                  <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item"><a href="./docs/index.html">Documentation</a></li>
                    <li class="list-inline-item"><a href="./faq.html">FAQ</a></li>
                  </ul>
                </div>
                <div class="col-auto">
                  <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source code</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2019 <a href=".">English School System</a>. Theme by <a href="https://codecalm.net" target="_blank">English School System</a> All rights reserved.
            </div>
          </div>
        </div>
      </footer>
    </div>

                  </section>
                  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                  <script src="js/bootstrap.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
                </body>
                </html>
                empresa