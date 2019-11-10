<?php
header("Content-Type: application/json; charset=UTF-8");
$config = include "../config.php";
include $config["base_dir"]."clases/Usuario.php";

$sql = new Master();

if (!isset($_POST["user"]) || $_POST["user"]=="")
	$query = "SELECT nombre,apellidoP,apellidoM,email,tipo,estatus FROM Usuario";
else 
	$query = "SELECT nombre,apellidoP,apellidoM,email,tipo,estatus FROM Usuario 
						WHERE 
									nombre LIKE '%".$_POST["user"]."%'
									OR apellidoP LIKE '%".$_POST["user"]."%'
									OR apellidoM LIKE '%".$_POST["user"]."%'
									OR tipo LIKE '%".$_POST["user"]."%'
									OR email LIKE '%".$_POST["user"]."%'";


$result = $sql->makeQuery($query);
$arr = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($arr);


?>
