<?php

require_once "database.php";

$message ='';

if (!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['password'])) {

	$sql= "INSERT INTO users_login (user, email, password) values (:user, :email, :password)";

	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':user',$_POST['user']);

	$stmt->bindParam(':email',$_POST['email']);

	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

	$stmt->bindParam(':password',$password);

	if ($stmt->execute()) {
		$message = 'Successfully created new user';
	} else {
		$message = 'Sorry there must been an issue creating your user';
	}

};

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
<body>

<div class="container">
		
		<div class="row">
			<div class="col col-login mx-auto">
				<div class="text-center mb-6">
					<h1>English School System</h1>
					<h3>SingUp</h3>

				<h5>				
						<?php if (!empty($message)): ?>
						<p><?= $message ?></p>
					<?php endif; ?>
					
					</h5>


				
				</div>
				<form action="signup.php" method="post" class="form-control">
					<div class="card-body p-6">
						<div class="card-title">Create new account</div>
						<div class="form-group">
							<label class="form-label">Name</label>
							<input type="text" class="form-control" placeholder="Enter name" id="user" name="user">
						</div>
						<div class="form-group">
							<label class="form-label">Email address</label>
							<input type="text" name="email"  placeholder="Enter you mail" class="form-control">
						</div>
						<div class="form-group">
							<label class="form-label">Password</label>
							<input type="password" name="password" placeholder="Enter your password" class="form-control">
						</div>
						<div class="form-group">
							<input type="password" name="confirm_password" placeholder="Confirm your password" class="form-control">
						</div>
						<div class="form-group">
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" />
								<span class="custom-control-label"><a href="terms.html">Agree the terms and policy</a></span>
							</label>
						</div>
						<div class="form-footer">
							<input type="submit" Value="Create new account" class="btn btn-primary btn-block">
						</div>
					</div>
				</form>
				<div class="text-center text-muted">
					Already have account? <span><a href="index.php">Login </a></span>

				</div>

				
				


			</form>
		</div>
	</div>
</div>






</body>
</html>