<?php
$config = include "../config.php";
include $config["base_dir"]."clases/Usuario.php";


if (isset($_POST["nombre"]) && isset($_POST["apellidoP"]) 
	  && isset($_POST["mail"]) && isset($_POST["pass"])){
	Usuario::newUsuario($_POST["nombre"],$_POST["apellidoP"],$_POST["apellidoM"],
									$_POST["mail"], $_POST["pass"], $_POST["type"], 
									$_POST["estatus"]);
	echo "Ya hay un nuevo Usuario";
}
else {
	echo "Error";
}
?>
