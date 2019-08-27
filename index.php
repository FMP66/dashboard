<?php

$alert = '';
session_start();

if(!empty($_SESSION['active']))
{
 // header('location: sistema/');
}else{

  if(!empty($_POST))
  {
    if(empty($_POST['usuario']) || empty($_POST['clave']))
    {
      $alert = 'Ingrese su usuario y su calve';
    }else{

      require_once "database.php";

      $user = mysqli_real_escape_string($conection,$_POST['usuario']);
      $pass = md5(mysqli_real_escape_string($conection,$_POST['clave']));

      $query = mysqli_query($conection,"SELECT * FROM users_login WHERE usuario= '$user' AND clave = '$pass'");
      mysqli_close($conection);
      $result = mysqli_num_rows($query);

      if($result > 0)
      {
        $data = mysqli_fetch_array($query);
        $_SESSION['active'] = true;
        $_SESSION['USER_ID'] = $data['USER_ID'];
        $_SESSION['user']   = $data['usuario'];
        $_SESSION['FIRST_NAME'] = $data['FIRST_NAME'];
         $_SESSION['LAST_NAME'] = $data['LAST_NAME'];
        $_SESSION['email']  = $data['email'];
        $_SESSION['rol']    = $data['rol'];

       
      }else{
        $alert = 'El usuario o la clave son incorrectos';
        session_destroy();
      }


    }

  }
}



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
  <title>ESSystem-Welcome</title>
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
    <div class="page-single">
      <div class="container">
        <?php if (!empty($message)) : ?>
          <p><?= $message ?></p>
        <?php endif;  ?>
        <div class="row">
          <div class="col col-login mx-auto">
            <div class="text-center mb-6">
              <img src="./assets/brand/tabler.svg" class="h-6" alt="">
            </div>
            <form class="card" action="./index04.php" method="post">
              <div class="card-body p-6">
                <div class="card-title">Login to your account</div>
                <div class="form-group">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control" id="user" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label class="form-label" id="password">
                    Password
                    <a href="./forgot-password.php" class="float-right small">I forgot password</a>
                  </label>
                  <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
                  <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" />

                    <span class="custom-control-label">Remember me</span>
                  </label>
                </div>
                <div class="form-footer">
                  <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
              </div>
            </form>
            <div class="text-center text-muted">
              Don't have account yet? <a href="./signup.php">Sign up</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>