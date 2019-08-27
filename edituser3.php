<?php

$server='localhost';
$username='root';
$password='fermarc2018';
$bd='mydb_school';


$conexion = mysqli_connect ($server, $username, $password, $bd)
or die("error en la conexion a la base de datos");



   include "./database.php";

   if(!empty($_POST))
   {
    $alert='';
    if(empty($_POST['FIRST_NAME']) || empty($_POST['LAST_NAME']) || empty($_POST['EMAIL'])  || empty($_POST['PHONE']) || empty($_POST['MOBILE']) || empty($_POST['ADDRESS'] || empty($_POST['COUNTRY'])|| empty($_POST['CITY'])|| empty($_POST['DATE'])))
    {
        $alert='<p class="msg_error">Todos los campos son obligatorios.</p>';
    }else{

        $USER_ID = $_POST['USER_ID'];
        $FIRST_NAME = $_POST['FIRST_NAME'];
        $LAST_NAME = $_POST['LAST_NAME'];
        $EMAIL  = $_POST['EMAIL'];
        $PHONE  = $_POST['PHONE'];
        $MOBILE  = $_POST['MOBILE'];
        $ADDRESS = $_POST['ADDRESS'];
        $COUNTRY = ($_POST['COUNTRY']);
        $CITY = $_POST['CITY'];
        $DATE = $_POST['DATE'];
        $PASSWORD  = $_POST['PASSWORD'];
        $rol  = $_POST['rol'];

        $query = mysqli_query($conexion,"SELECT * FROM users 
           WHERE (USER_ID = '$user' AND USER_ID != $USER_ID)
           OR (EMAIL = '$EMAIL' AND USER_ID != $USER_ID) ");

        $result = mysqli_fetch_array($query);

        if($result > 0){
            $alert='<p class="msg_error">El correo o el usuario ya existe.</p>';
        }else{

            if(empty($_POST['clave']))

                $sql_update = mysqli_query($conexion,"UPDATE users SET USER_ID= '$USER_ID', 
                    FIRST_NAME = '$FIRST_NAME',
                    LAST_NAME = '$LAST_NAME',
                    EMAIL= '$EMAIL',
                    PHONE= '$PHONE',
                    MOBILE= '$MOBILE',
                    ADDRESS= '$ADDRESS',
                    COUNTRY= '$COUNTRY',
                    CITY= '$CITY',
                    DATE= '$DATE',
                    PASSWORD= '$PASSWORD',
                    rol= '$rol' WHERE USER_ID= $USER_ID ");
       
                    $sql_update = mysqli_query($conexion,"UPDATE users
                                                            SET USER_ID='$USER_ID', FIRST_NAME = '$FIRST_NAME', EMAIL='$EMAIL', PHONE='$PHONE', MOBILE='$MOBILE', ADDRESS='$ADDRESS', COUNTRY='$COUNTRY', CITY='$CITY',  DATE='$DATE', PASSWORD='$PASSWORD', rol='$rol'
                                                            WHERE USER_ID= $USER_ID ");

                }

        

        if($sql_update){
            $alert='<p class="msg_save">Usuario actualizado correctamente.</p>';
        }else{
            $alert='<p class="msg_error">Error al actualizar el usuario.</p>';
          }  
        }
    }


    



    //Mostrar Datos
if(empty($_REQUEST['id']))
{

$USER_ID = $_REQUEST['id'];

$sql= mysqli_query($conexion,"SELECT u.USER_ID, u.FIRST_NAME,u.EMAIL,u.PHONE, u.MOBILE, u.ADDRESS, u.COUNTRY, u.CITY, u.DATE (u.rol) as idrol, (r.rol) as rol
    FROM users u
    INNER JOIN rol r
    on u.rol = r.idrol
    WHERE USER_ID= $USER_ID ");

$result_sql = mysqli_num_rows($sql);

if($result_sql == 0){
  
}else{
    $option = '';
    while ($data = mysqli_fetch_array($sql)) {
           
        $USER_ID  = $data['USER_ID'];
        $FIRST_NAME  = $data['FIRST_NAME'];
        $LAST_NAME  = $data['LAST_NAME'];

        $EMAIL  = $data['EMAIL'];
        $PHONE = $data['PHONE'];
        $MOBILE  = $data['MOBILE'];
        $ADDRESS  = $data['ADDRESS'];
        $COUNTRY  = $data['COUNTRY'];
        $CITY  = $data['CITY'];
        $DATE  = $data['DATE'];
        $idrol   = $data['idrol'];
        $rol     = $data['rol'];

        if($idrol == 1){
            $option = '<option value="'.$idrol.'" select>'.$rol.'</option>';
        }else if($idrol == 2){
            $option = '<option value="'.$idrol.'" select>'.$rol.'</option>';    
        }else if($idrol == 3){
            $option = '<option value="'.$idrol.'" select>'.$rol.'</option>';
        }
    }
}
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
    <title>EESystem-Edituser</title>
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
<body>
    <div class="page">
        <div class="page-main">
            <div class="header py-4">
                <div class="container">
                    <div class="d-flex">
                        <a class="header-brand" href="./index_02.php">
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
                                        <a href="./cards.html" class="dropdown-item ">Companies</a>
                                        <a href="./charts.html" class="dropdown-item ">Schools</a>
                                        <a href="./pricing-cards.html" class="dropdown-item ">Teachers</a>
                                        <a href="./pricing-cards.html" class="dropdown-item ">Student</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Components</a>
                                    <div class="dropdown-menu dropdown-menu-arrow">
                                        <a href="./maps.html" class="dropdown-item ">Maps</a>
                                        <a href="./store.html" class="dropdown-item ">Store</a>
                                        <a href="./blog.html" class="dropdown-item ">Blog</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i>Link</a>
                                    <div class="dropdown-menu dropdown-menu-arrow">
                                        <a href="./profile.html" class="dropdown-item ">Profile</a>
                                        <a href="./login.html" class="dropdown-item ">Login</a>
                                        <a href="./register.html" class="dropdown-item ">Register</a>
                                        <a href="./forgot-password.html" class="dropdown-item ">Forgot password</a>
                                        <a href="./email.html" class="dropdown-item ">Email</a>
                                        <a href="./empty.html" class="dropdown-item ">Empty page</a>
                                        <a href="./rtl.html" class="dropdown-item ">RTL mode</a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

                    <form action="" method="post">
                         <section id="container">
        <div class="container-fluid">
            <div class="row">
            <div class="card">
                    <div class="form_register">
                    <h1>Actualizar usuario</h1>
                    <br>
                    <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
                        <input type="text" name="USER_ID" value="<?php echo $USER_ID; ?>">
                        
                        <label for="FIRST_NAME">FIRST NAME</label>
                        <input type="text" name="FIRST_NAME" id="FIRST_NAME" placeholder="FIRST_NAME" >
                        
                        <label for="LAST_NAME">LAST NAME</label>
                        <input type="text" name="LAST_NAME" id="LAST_NAME" placeholder="LAST_NAME" value="<?php echo $LAST_NAME; ?>">
                        
                        <label for="EMAIL">Correo electrónico</label>
                        <input type="email" name="EMAIL" id="EMAIL" placeholder="EMAIL" value="<?php echo $EMAIL; ?>">
                        
                        <label for="PHONE">PHONE</label>
                        <input type="phone" name="PHONE" id="PHONE" placeholder="PHONE" value="<?php echo $PHONE; ?>">
                        
                        <label for="MOBILE">MOBILE</label>
                        <input type="" name="MOBILE" id="MOBILE" placeholder=" MOBILE" value="<?php echo $MOBILE; ?>">
                        
                        <label for="ADDRESS">ADDRESS</label>
                        <input type="text" name="ADDRESS" id="ADDRESS" placeholder="ADDRESS" value="<?php echo $ADDRESS; ?>">


                        <label for="COUNTRY">COUNTRY</label>
                        <input type="text" name="COUNTRY" id="COUNTRY" placeholder="COUNTRY" value="<?php echo $COUNTRY; ?>">

                        <label for="CITY">CITY</label>
                        <input type="text" name="CITY" id="CITY" placeholder="CITY" value="<?php echo $CITY; ?>">

                       <label for="DATE">DATE</label>
                        <input type="date" name="DATE" id="DATE" placeholder="DATE" value="<?php echo $DATE; ?>">

                        <label for="USER">Usuario</label>
                        <input type="text" name="user" id="user" placeholder="USER" value="<?php echo $USER; ?>">

                        <label for="clave">Clave</label>
                        <input type="password" name="clave" id="clave" placeholder="Clave de acceso">

                        <label for="rol">Tipo Usuario</label>

                        <?php 
                        include "./database.php";
                        $query_rol = mysqli_query($conexion,"SELECT * FROM rol");
                        mysqli_close($conexion);
                        $result_rol = mysqli_num_rows($query_rol);

                        ?>

                        <select name="rol" id="rol" class="notItemOne">
                            <?php
                            echo $option; 
                            if($result_rol > 0)
                            {
                                while ($rol = mysqli_fetch_array($query_rol)) {
                            ?>
                                    <option value="<?php echo $rol["idrol"]; ?>"><?php echo $rol["rol"] ?></option>
                           
                        </select>
                        <input type="submit" value="Actualizar usuario" class="btn_save">
                   </div></div></div></div>
            </section>
                    </form>
                

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
    <!--<footer class="footer">
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
                            <a href="#" class="btn btn-outline-primary btn-sm">Source code</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                    Copyright © 2018 <a href=".">Tabler</a>. Theme by <a href="https://codecalm.net" target="_blank">codecalm.net</a> All rights reserved.
                </div>
            </div>
        </div>
    </footer>-->
</body>    
</html>