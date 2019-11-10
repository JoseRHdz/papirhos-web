<?php

require_once "Master.php";

/**
 * Clase que modela una imprenta, hereda de la clase "Master".
 * @author José Roberto Hernández Alvarez
 * @author 
 * @author 
 * @version 1.0
 */
class Imprenta extends Master {

	private $id;
	private $tableName;

/**
 * Constructor.
 * @param $id entero que representa el identificador de la tabla. 
 */
	public function __construct (int $id) {
		$this->tableName = "Imprenta";
		$this->id = $id;
	}

/**
 * Método que inserta una nueva imprenta en la base de datos.
 * @param $nombre cadena de carácteres que representa el nombre de la imprenta.
 */
	public static function newImprenta ($nombre) {
		$tableName = "Imprenta";

		$sql = "INSERT INTO $tableName (nombre) VALUES "."('$nombre')";
		$m = new Master();
		$m->insertRegister($sql);
		return $m->idR;
	}


/*******************************************************************************
 *************************************setters***********************************
 ******************************************************************************/

/**
 * Método que actualiza el nombre de una imprenta.
 * @param $nombre cadena de crácteres que representa el nombre de la imprenta.
 */
	public function setNombre ($nombre) {
		$sql = "UPDATE $this->tableName SET nombre = '$nombre' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}


/*******************************************************************************
 *************************************getters***********************************
 ******************************************************************************/

/**
 * Método que obtiene el nombre de una imprenta.
 * @return nombre, el nombre de la imprenta.
 */
	public function getNombre () {
		$sql = "SELECT nombre From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->nombre;
	}

/**
 * Destructor.
 */
	public function __destruct () {
	}

}

?>
