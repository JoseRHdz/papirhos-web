<?php

require_once "Persona.php";

class Comprador extends Persona {

	private $idC;

	public function __construct ($idC) {
		$this->idC = $idC;
		$this->tableName = "Comprador";
		$this->id = $idC;
	}

	public static function newComprador ($nombre, $apellidoP, $apellidoM, 
																			 $numCuenta) {
		$tableName="Comprador";

		$sql = "INSERT INTO $tableName
						(nombre,apellidoP,apellidoM,NoCuenta) VALUES ".
					 "(
					 	 '$nombre', '$apellidoP', '$apellidoM', '$numCuenta'
						)";
		$m = new Master();
		$m->insertRegister($sql);
		return $m->idR;
	}

//setters

	public function setNCuenta ($numCuenta) {
		$sql = "UPDATE $this->tableName SET NoCuenta = '$numCuenta' WHERE 
																												 id = '$this->idC'";
		parent::insertRegister($sql);
	}

//getters

	public function getNCuenta () {
		$sql = "SELECT NoCuenta From $this->tableName WHERE id = '$this->idC'";
		parent::selectRegister($sql);
		return $this->result->NoCuenta;
	}

	public function __destruct () {
	}

}
/*$id=Comprador::newComprador('José','Her','Alv','64386384622');
$c = new Comprador($id);
$c->setNCuenta('1111111111');
echo $c->getNombre();
echo $c->getApellidoP();
echo $c->getApellidoM();
echo $c->getNCuenta();*/
?>
