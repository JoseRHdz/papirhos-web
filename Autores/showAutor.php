<?php
header("Content-Type: application/json; charset=UTF-8");
$config = include "../config.php";
include $config["base_dir"]."clases/Autor.php";

$sql = new Master();

if (!isset($_POST["autor"]) || $_POST["autor"]=="")
	$query = "SELECT * FROM Autor";
else 
	$query = "SELECT * FROM Autor WHERE nombre LIKE '%".$_POST["autor"]."%'
																OR apellidoP LIKE '%".$_POST["autor"]."%'
																OR apellidoM LIKE '%".$_POST["autor"]."%'";


$result = $sql->makeQuery($query);
$arr = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($arr);


?>
