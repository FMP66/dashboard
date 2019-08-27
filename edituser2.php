<?php

$server = "localhost";
$usuario = "root";
$contraseña = "fermarc2018";
$bd = "mydb_school";

$conexion = mysqli_connect ($server, $usuario, $contraseña, $bd)
or die("error en la conexion a la base de datos");

 if(!empty($_POST))
   {
    $alert='';}
    if(empty($_POST['FIRST_NAME']) || empty($_POST['LAST_NAME']) || empty($_POST['EMAIL'])  || empty($_POST['PHONE']) || empty($_POST['MOBILE']) || empty($_POST['ADDRESS'] || empty($_POST['COUNTRY'])|| empty($_POST['CITY'])|| empty($_POST['DATE']))){
   
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

        $result = mysqli_fetch_array($query);}

        if($result > 0){
            $alert='<p class="msg_error">El correo o el usuario ya existe.</p>';
        }else{

            if(empty($_POST['clave']))

                {$sql_update = mysqli_query($conexion,"UPDATE users SET USER_ID= '$USER_ID', 
                    FIRST_NAME = '$FIRST_NAME',
                    LAST_NAME = '$LAST_NAME',
                    EMAIL= '$EMAIL',
                    PHONE= '$PHONE',
                    MOBILE= '$MOBILE',
                    ADDRESS= '$ADDRESS',
                    COUNTRY= '$COUNTRY',
                    CITY= '$CITY',
                    /*DATE= '$DATE',*/
                    PASSWORD= '$PASSWORD',
                    rol= '$rol' WHERE USER_ID= $USER_ID ");}
       
                    else{$sql_update = mysqli_query($conexion,"UPDATE users
                                                            SET USER_ID='$USER_ID', FIRST_NAME = '$FIRST_NAME', EMAIL='$EMAIL', PHONE='$PHONE', MOBILE='$MOBILE', ADDRESS='$ADDRESS', COUNTRY='$COUNTRY', CITY='$CITY',  DATE='$DATE', PASSWORD='$PASSWORD', rol='$rol'
                                                            WHERE USER_ID= $USER_ID ");}

                

mysqli_close($conexion);
echo "DATOS ACTUALIZADOS";


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
<body class="">
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
            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                         <form action="index04.php" method="post" class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Actualizacion de Datos</h3>   
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 form-control ml-30 p-10">

                                            <div class="form-group">
                                                <label class="form-label">First_name<span>*</span></label>
                                                <input type="text" class="form-control" id="FIRST_NAME" name="FIRST_NAME" value="<?php echo $FIRST_NAME; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Last_name<span >*</span></label>
                                                <input type="text" class="form-control" id="LAST_NAME" name="LAST_NAME" value="<?php echo $LAST_NAME; ?>" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Email<span >*</span></label>
                                                <input type="email" class="form-control" id="EMAIL" name="EMAIL" value="<?php echo $EMAIL; ?>" />
                                            </div>
                                            <div class="form-group mb-0">
                                                <label class="form-label">Phone</label>
                                                <input type="tel" class="form-control" id="PHONE1" name="PHONE" value="<?php echo $PHONE; ?>" >
                                            </div>
                                            <div class="form-group mb-0">
                                                <label class="form-label">Mobile</label>
                                                <input type="tel" class="form-control" id="MOBILE" name="MOBILE" value="<?php echo $MOBILE; ?>" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Address<span>*</span></label>
                                                <input type="text" class="form-control" id="ADDRESS" name="ADDRESS" value="<?php echo $ADDRESS; ?>" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Country<span>*</span></label>
                                                <input type="text" class="form-control" id="" name="COUNTRY" value="<?php echo $COUNTRY; ?>" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">City<span>*</span></label>
                                                <input type="text" class="form-control" id="CITY" name="CITY" value="<?php echo $CITY; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">date<span>*</span></label>
                                                <input type="Date" class="form-control" id="DATE" name="DATE" value="<?php echo $DATE; ?>" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Date of birth</label>
                                                <div class="row gutters-xs">
                                                    <div class="col-5">
                                                        <select name="user[month]" class="form-control custom-select">
                                                            <option value="">Month</option>
                                                            <option value="1">January</option>
                                                            <option value="2">February</option>
                                                            <option value="3">March</option>
                                                            <option value="4">April</option>
                                                            <option value="5">May</option>
                                                            <option selected="selected" value="6">June</option>
                                                            <option value="7">July</option>
                                                            <option value="8">August</option>
                                                            <option value="9">September</option>
                                                            <option value="10">October</option>
                                                            <option value="11">November</option>
                                                            <option value="12">December</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-3">
                                                        <select name="user[day]" class="form-control custom-select">
                                                            <option value="">Day</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option selected="selected" value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-4">
                                                        <select name="user[year]" class="form-control custom-select">
                                                            <option value="">Year</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option selected="selected" value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1950">1950</option>
                                                            <option value="1949">1949</option>
                                                            <option value="1948">1948</option>
                                                            <option value="1947">1947</option>
                                                            <option value="1946">1946</option>
                                                            <option value="1945">1945</option>
                                                            <option value="1944">1944</option>
                                                            <option value="1943">1943</option>
                                                            <option value="1942">1942</option>
                                                            <option value="1941">1941</option>
                                                            <option value="1940">1940</option>
                                                            <option value="1939">1939</option>
                                                            <option value="1938">1938</option>
                                                            <option value="1937">1937</option>
                                                            <option value="1936">1936</option>
                                                            <option value="1935">1935</option>
                                                            <option value="1934">1934</option>
                                                            <option value="1933">1933</option>
                                                            <option value="1932">1932</option>
                                                            <option value="1931">1931</option>
                                                            <option value="1930">1930</option>
                                                            <option value="1929">1929</option>
                                                            <option value="1928">1928</option>
                                                            <option value="1927">1927</option>
                                                            <option value="1926">1926</option>
                                                            <option value="1925">1925</option>
                                                            <option value="1924">1924</option>
                                                            <option value="1923">1923</option>
                                                            <option value="1922">1922</option>
                                                            <option value="1921">1921</option>
                                                            <option value="1920">1920</option>
                                                            <option value="1919">1919</option>
                                                            <option value="1918">1918</option>
                                                            <option value="1917">1917</option>
                                                            <option value="1916">1916</option>
                                                            <option value="1915">1915</option>
                                                            <option value="1914">1914</option>
                                                            <option value="1913">1913</option>
                                                            <option value="1912">1912</option>
                                                            <option value="1911">1911</option>
                                                            <option value="1910">1910</option>
                                                            <option value="1909">1909</option>
                                                            <option value="1908">1908</option>
                                                            <option value="1907">1907</option>
                                                            <option value="1906">1906</option>
                                                            <option value="1905">1905</option>
                                                            <option value="1904">1904</option>
                                                            <option value="1903">1903</option>
                                                            <option value="1902">1902</option>
                                                            <option value="1901">1901</option>
                                                            <option value="1900">1900</option>
                                                            <option value="1899">1899</option>
                                                            <option value="1898">1898</option>
                                                            <option value="1897">1897</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-footer text-right">
                                                <button type="submit" class="btn btn-primary" onclick="modificar">Update Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </form></div></div></form></div></div></div></div>
                       
                 </body>





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
                            Copyright © 2018 <a href=".">Tabler</a>. Theme by <a href="https://codecalm.net" target="_blank">codecalm.net</a> All rights reserved.
                        </div>
                    </div>
                </div>
            </footer>
        </div>
   
    </html>