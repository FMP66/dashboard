 <?php

 $server='localhost';
$username='root';
$password='fermarc2018';
$bd='mydb_school';


$conexion = mysqli_connect ($server, $username, $password, $bd)
or die("error en la conexion a la base de datos");
 

 $salida = "";


 $query = "SELECT * FROM users WHERE FIRST_NAME NOT LIKE '' ORDER By USER_ID LIMIT 25";

 if (isset($_POST['consulta'])) {
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query = "SELECT * FROM users WHERE USER_ID LIKE '%$q%' OR FIRST_NAME LIKE '%$q%' OR LAST_NAME LIKE '%$q%' OR EMAIL LIKE '%$q%' OR COUNTRY LIKE '$q' ";
}

$resultado = $conexion->query($query);

if ($resultado->num_rows>0) {
	$salida.="<table table-stripe table-hover>
	
	<tr id='titulo'>
	<td></td>
	<td>USER_ID</td>
	<td>FIRST_NAME</td>
	<td>LAST_NAME</td>
	<td>EMAIL</td>
	<td>DATE</td>
	</tr>


	</thead>
	

	<tbody>";

	while ($fila = $resultado->fetch_assoc()) {
		$salida.="<tr table table table-stripe table-hover table-sm>

		<td><span class=avatar style=background-image: url(../demo/faces/female/25.jpg)>
  <span class=avatar-status bg-green></span>
</span></td>

		<td>".$fila['USER_ID']."</td>
		<td>".$fila['FIRST_NAME']."</td>
		<td>".$fila['LAST_NAME']."</td>
		<td>".$fila['EMAIL']."</td>
		
		<td>".$fila['DATE']."</td>

		<td class=text-center>
		<a href= profile.php class=btn btn-secondary btn-sm >Ver perfil</a>
		</td>
		<td>
		<a href= deluser.php class=btn btn-secondary btn-sm data-toggle=modal data-target=#Eliminar>Eliminar</a>
		</td>
		<td>
		<a href= index04.php class=btn btn-primary btn-sm data-toggle= modal data-target= #modificar>Modificar</a>
		</td>
		</tr>";

	}
	$salida.="</tbody></table>";
}else{
	$salida.="NO HAY REGISTRO QUE COINCIDAN.";
}


echo $salida;

$conexion->close();
?>