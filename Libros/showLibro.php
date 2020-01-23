<?php
header("Content-Type: application/json; charset=UTF-8");
$config = include "../config.php";
include $config["base_dir"]."clases/Libro.php";

$sql = new Master();

if (!isset($_POST["libro"]) || $_POST["libro"]=="")
	$query = "SELECT * FROM Libro";
else 
	$query = "SELECT * FROM Libro WHERE titulo LIKE '%".$_POST["libro"]."%'";


$result = $sql->makeQuery($query);
$arr = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($arr);


?>
