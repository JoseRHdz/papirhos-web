<?php
$config = include "../config.php";
include $config["base_dir"]."clases/Autor.php";


if (isset($_POST["nombre"]) && isset($_POST["apellidoP"])){
	Autor::newAutor($_POST["nombre"],$_POST["apellidoP"],$_POST["apellidoM"],
									$_POST["nLegal"]);
	echo "Ya hay un nuevo Autor";
}
else {
	echo "Error";
}
?>
