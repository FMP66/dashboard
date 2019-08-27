<?php

$server = "localhost";
$usuario = "root";
$contraseña = "fermarc2018";
$bd = "mydb_school";

$conexion = mysqli_connect ($server, $usuario, $contraseña, $bd)
or die("error en la conexion a la base de datos");

$consulta=  mysqli_query($conexion, "SELECT * from users")
or die("Error al TRAER LOS DATOS");

mysqli_close ($conexion);



?>

<!doctype html>
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
  <title>Homepage</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
 
</head>
<body class="">
  <div class="page">
    <div class="page-main">
      <div class="header py-4">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-3 ml-auto">

              <form action="buscador.php" method="post" class="input-icon my-3 my-lg-0">
              <input type="text" name="search"  class="form-control header-search" placeholder="Search&hellip;" tabindex="1" id="search" <?php echo $search; ?>>
                <div class="input-icon-addon">
                  <i class="fe fe-search"></i>
                </div>
              </form>
            </div>
          
            <div class="row">
              <div class="col-12">
                <div class="container-fluid">
                  <div class="row">
                  <div class="card card-profile">
                   <div class="col-md-12">
                    <table class="table table-stripe table-hover table condensed" >
                      <div class="content">
                        <?php
                        $conexion = mysqli_connect ($server, $usuario, $contraseña, $bd)
                        or die("error en la conexion a la base de datos");

                        $consulta=  mysqli_query($conexion, "SELECT * from users")
                        or die("Error al TRAER LOS DATOS");

//$consulta=  mysqli_query($conexion, "SELECT u.USER_ID, u.FIRST_NAME, u.LAST_NAME, u.EMAIL, u.DATE from users u INNER JOIN USER_ID r on u.USER_ID WHERE estatus = 1")
                       // or die("Error al TRAER LOS DATOS");




                        echo  '<table class="table table-stripe table-hover">';
                        echo '<tr>';
                        echo '<td></td>';
                        echo'<th> USER_ID</th>';
                        echo '<th>FIRST_NAME</th>';
                        echo '<th>LAST_NAME</th>';
                        echo '<th>EMAIL</th>';
                        echo '<th>DATE</th>';
                        echo '<th>VER</th>';
                        echo '<th>EDITAR</th>';
                        echo '<th></th>';

                        echo '</tr>';

                        while ($extraido = mysqli_fetch_array($consulta))
                        {
                          echo '<tr>';
                          echo '<td><img src="imagenes\cara niño.jpg" width="35" height="30"></td>';
                          echo '<td>'.$extraido['USER_ID'].'</td>';
                          echo '<td>'.$extraido['FIRST_NAME'].'</td>';
                          echo '<td>'.$extraido['LAST_NAME'].'</td>';
                          echo '<td>'.$extraido['EMAIL'].'</td>'; 
                          echo '<td>'.$extraido['DATE'].'</td>';

                          echo '<td class="text-right">';
                          echo '<a href="profile.php" class="btn btn-secondary btn-sm">Ver perfil</a>';
                          echo'<div class="dropdown">';
                          echo  '<button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Eliminar</button>';
                          echo'</div>';
                          echo'</td>';
                          echo'<td>';
                          echo'<a class="icon" href="edituser_02.php">';
                          echo'<i class="fe fe-edit"></i>';
                          echo'</a>';
                          echo'</td>';
                          echo '</tr>';
                        }

                        mysqli_close ($conexion);
                        echo '</Table>'
                        ?>
                      </div>

                    </table>
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


              </body>
              </html>