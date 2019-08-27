<?php

$server='localhost';
$username='root';
$password='fermarc2018';
$bd='mydb_school';


$conexion = mysqli_connect ($server, $username, $password, $bd)
or die("error en la conexion a la base de datos");

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
				<div class="container-fluid">
					<div class="d-flex">
						<a class="header-brand" href="./index.php">

							<h1>ESSystem</h1>
						</a>
						<div class="d-flex order-lg-2 ml-auto">
							<div class="nav-item d-none d-md-flex">
								<a href="#" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>
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
									<a class="dropdown-item" href="index.php">
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
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-3 ml-auto">

							
						</div>

						<div class="col-lg order-lg-first">
							<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
								<li class="nav-item">
									<a href="./index04.php" class="nav-link active"><i class="fe fe-home"></i> Home</a>
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
								<li class="nav-item">
									<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i>Administrative Management</a>
									<div class="dropdown-menu dropdown-menu-arrow">
										<a href="./pagos.php" class="dropdown-item ">Companies</a>
										<a href="./pagos.php" class="dropdown-item ">Schools</a>
										<a href="./pagos.php" class="dropdown-item ">Teachers</a>
										<a href="./pagos.php" class="dropdown-item ">Student</a>
									</div>
								</li>

								<li class="nav-item">
									<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i>Study Control</a>
									<div class="dropdown-menu dropdown-menu-arrow">
										<a href="./reg_cur_Empresas.php" class="dropdown-item ">Companies</a>
										<a href="./reg_cur_Escuelas.php" class="dropdown-item ">Schools</a>
										<a href="./reg__cur_profesores.php" class="dropdown-item ">Teachers</a>
										<a href="./reg_cur_estudiantes.php" class="dropdown-item ">Student</a>
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
										<a href="./signup.php" class="dropdown-item ">Register</a>
										<a href="./forgot-password.php" class="dropdown-item ">Forgot password</a>
										<a href="./email.php" class="dropdown-item ">Email</a>

									</div>
								</li>

							</ul>
						</div>
					</div>

				</div>
			</div></div><br>
			
			<div class="col-md-12 ml-auto">
				<div class="container-fluid ">
					<div class="row">
						<form action="index04.php" method="post" class="card">
							<div class="card-body">
								<div class="col-md-8">
									<a href="newuser.php" class="btn btn-primary btn-lg"> Crear Usuario</a>
									<a href="index04.php" class="btn btn-secondary btn-lg ml-2">Cancelar</a>
									<a href="index.php" class="btn btn-danger btn-lg ml-2">Salir</a>
								</div>
							</div>
						</form>
						<div class="card">
							<table class="table table-stripe table-hover">
								<div class="content">
									<div class="formulario form-control">
										<label for="caja_busqueda">Busqueda de Usuarios</label>
										<input type="text" name="caja_busqueda" id="caja_busqueda"></input>
									</div>
									<div class="card-body">
										<div class="container-fluid p-6">
											<div class="row">
												<div class="col-md-12">
													<div id="datos" class="table table-stripe table-hover">

													</div>
												</div>
											</div>
										</div>
									</div>

								</table>
							</div>

							
							
							

							<div class="container-fluid">
								<div class="row">
									<div class="col-md-4">
										<div class="col col-login mx-auto">
											<form action="signup.php" method="post" class="form-control" name="newuser2">
												<div class="card-body p-6">
													<div class="card-title">Create new account</div>
													<div class="form-group">
														<label class="form-label">Name</label>
														<input type="text" class="form-control" placeholder="Enter name" name="user">
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
											
										</div>
									</div>


									
									<div class="col-md-8 ml-auto">
										<div class="card">
											<div class="card-body">
												<table class="table table-stripe table-hover table-sm" >
													<div class="content">
														<?php
														$conexion = mysqli_connect ($server, $username, $password, $bd)
														or die("error en la conexion a la base de datos");

														$consulta=  mysqli_query($conexion, "SELECT * from users_login LIMIT 20 OFFSET 40")
														or die("Error al TRAER LOS DATOS");

														echo  '<table class="table table-stripe table-hover Table-sm">';
														echo '<tr>';

														echo'<th>USER_ID</th>';
														echo '<th>USER</th>';
														echo '<th>EMAIL</th>';
														echo '<th>ROL</th>';
														echo '<th></th>';
														echo '</tr>';

														while ($extraido = mysqli_fetch_array($consulta))
														{
															echo '<tr>';

															echo '<td>'.$extraido['USER_ID'].'</td>';
															echo '<td>'.$extraido['USER'].'</td>';
															echo '<td>'.$extraido['EMAIL'].'</td>';
															echo '<td>'.$extraido['ROL'].'</td>';

															echo '<td class="text-right">';
															echo '<a href="profile.php" class="btn btn-secondary btn-sm">Ver perfil</a>';

															echo  '<a class="btn btn-secondary btn-sm " href="deluser_login.php">Eliminar</a>';

															echo'</td>';
															echo'<td>';
															echo'<a class="icon" href="edituser3.php" onclick="modificar">';
															echo'<i class="fe fe-edit"></i>';
															echo'</a>';
															echo'</td>';
															echo '</tr>';
														}

														mysqli_close ($conexion);
														echo '</Table>'
														?>
													</div>
													<nav aria-label="...">
														<ul class="pagination">
															<li class="page-item disabled">
																<span class="page-link">Previous</span>
															</li>
															<li class="page-item"><a class="page-link" href="index04.php">1</a></li>
															<li class="page-item active" aria-current="page">
																<span class="page-link">
																	2
																	<span class="sr-only">(current)</span>
																</span>
															</li>
															<li class="page-item"><a class="page-link" href="index04.php">3</a></li>
															<li class="page-item">
																<a class="page-link" href="#">Next</a>
															</li>
														</ul>
													</nav>
												</table>

											</div></div></div></div>
										</div>

										
										<table class="table table-stripe table-hover table-sm" >
											<div class="content">
												<nav aria-label="Page navigation example">
													<ul class="pagination justify-content-end">
														<li class="page-item disabled">
															<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
														</li>
														<li class="page-item"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item">
															<a class="page-link" href="#">Next</a>
														</li>
													</ul>
												</nav>
											</table>

											
										</div>

										
										<!-- Button trigger modal -->


										<!-- Modal -->
										<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
											<div class="modal-dialog modal-dialog-scrollable" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalScrollableTitle">Editar Usuario</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														...  <div class="container">
															<div class="row">
																<div class="card">
																	<div class="col-md-12 form-control">

																		<form action="index04.php" method="post" id="modificar-form">
																			<div class="form-group">
																				<label class="form-label" name="USER_ID">USER_ID<span></span></label>
																				<input type="text"  class="form-control" name="USER_ID" value="<?php echo $USER_ID; ?>" />
																			</div>
																			<div class="form-group">
																				<label class="form-label">First_name<span>*</span></label>
																				<input type="text" class="form-control" name="FIRST_NAME" value="<?php echo $FIRST_NAME; ?>" />
																			</div>
																			<div class="form-group">
																				<label class="form-label">Last_name<span></span></label>
																				<input type="text" class="form-control" name="LAST_NAME" value="<?php echo $LAST_NAME; ?>" />
																			</div>
																			<div class="form-group">
																				<label class="form-label">Email<span></span></label>
																				<input type="email" class="form-control" name="EMAIL" value="<?php echo $EMAIL; ?>" />
																			</div>

																			<div class="form-group mb-0">
																				<label class="form-label">Phone<span></span></label>
																				<input type="tel" class="form-control" name="PHONE" value="<?php echo $PHONE; ?>" />
																			</div>

																			<div class="form-group mb-0">
																				<label class="form-label">Mobile<span></span></label>
																				<input type="tel" class="form-control" name="MOBILE" value="<?php echo $MOBILE; ?>" />
																			</div>

																			<div class="form-group">
																				<label class="form-label">Address<span></span></label>
																				<input type="text" class="form-control" name="ADDRESS" value="<?php echo $ADDRESS; ?>" />
																			</div>

																			<div class="form-group">
																				<label class="form-label">Country<span></span></label>
																				<input type="text" class="form-control" name="COUNTRY" value="<?php echo $COUNTRY; ?>" />
																			</div>

																			<div class="form-group">
																				<label class="form-label">City<span></span></label>
																				<input type="text" class="form-control" name="CITY" value="<?php echo $CITY; ?>" />
																			</div>
																			<div class="form-group">
																				<label class="form-label">date<span></span></label>
																				<input type="Date" class="form-control" name="DATE" value="<?php echo $DATE; ?>" />
																			</div>

																			<div class="form-group">
																				<label class="form-label">Date of birth<span></span></label>
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
																		</div>
																	</div>
																</div>
															
														</div>
														<div class="modal-footer">
															<button href="index4.php" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
															<button  name="modificar" type="submit" class="btn btn-primary">Save changes</button>
														</form>
													</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</form>
							</div>
						</div>

					</div>
					
				</div>
		
	<!-- Button trigger modal -->


	<!-- Modal -->
	<div class="modal fade" id="Eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalScrollableTitle">Introduzca el ID del Usuario</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
		  </button>
	  </div>
	  <div class="modal-body">
		<div class="container" class="form-control">  
			<div class="row">
			 <div class="col-sm-12" >
				<div class="row">
					<div class="col-sm-6" >
						<div class="btn-group btn-group-justified" role="group" aria-label="edicion">
							<form action="index04.php">
								<button type="submit" class="btn btn-danger">Cancelar</button>
							</form>
						</div>
					</div>
					<div class="col-sm-6">
						<form action="deluser.php" method="POST">

							<div class="input-group input-group-sm">
								<span class="input-group-addon" id="sizing-addon1"></span>
								<input type="text" name="USER_ID" class="form-control" placeholder="Introduzca el usuario" aria-describedby="sizing-addon1">
							</div><br>


							<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
							<button type="submit" class="btn btn-primary" value="submit">Eliminar Usuario</button>

						</form>
					</div>
				</div>
			</div>
		</div></div></div></div></div></div></table></table></div></div>
		

		



		
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
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>

	</html>         