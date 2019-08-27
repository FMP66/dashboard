  <?php


$server='localhost';
$username='root';
$password='fermarc2018';
$db='mydb_school';

try {
	$conn=new PDO("mysql:host=$server;dbname=$db;",$username, $password); 
} catch (PDOException $e) {
die('Connected failed: '. $e->getMessage());
}

?>