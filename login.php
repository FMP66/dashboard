<?php

session_start();

if (isset($_SESSION['USER_ID'])) {
	header('location: /school-03');
}

require 'database.php';

	if (!empty($_POST['EMAIL']) && !empty($_POST['PASSWORD'])) {
	$records = $conn->prepare('SELECT EMAIL, PASSWORD FROM users_login WHERE EMAIL = :EMAIL');
	   $records->bindParam(':EMAIL', $_POST['EMAIL']);
	   $records->execute();
	   $results = $records->fetch(PDO::FETCH_ASSOC);
	   $message = '';

	   if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
	   $_SESSION['EMAIL'] = $results['EMAIL'];
	   header('location: /school-03');
	   } else {
	   	$message = 'Sorry, those credentials do not macth';
	   }
	}

?>


<!DOCTYPE html>
<html>
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
	<title>Welcome</title>
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


<h1>Login</h1>
<span> or <a href="signup.php">SingUp</a></span><br><br>

<?php if (!empty($message)) : ?>
	<p><?= $message ?></p>
<?php endif;  ?>

<form action="index_03.php" method="post">
<input type="text" name="email"  placeholder="Enter you mail">
<input type="password" name="password" placeholder="Enter your password">
<input type="submit" name="Send">
	
</form>
</body>
</html>