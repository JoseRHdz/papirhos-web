<?php

require_once "Master.php";

/**
 * Clase que modela una serie, hereda de la clase "Master".
 * @author José Roberto Hernández Alvarez
 * @author 
 * @author 
 * @version 1.0
 */
class Serie extends Master {

	private $id;
	private $tableName;

/**
 * Constructor.
 * @param $id entero que representa el identificador del registro.
 */
	public function __construct (int $id) {
		$this->tableName = "Serie";
		$this->id = $id;
	}

/**
 * Método que inserta una nueva serie a la base de datos.
 * @param $nombre cadena de carácteres que representa el nombre de la serie.
 */
	public static function newSerie ($nombre) {
		$tableName = "Serie";

		$sql = "INSERT INTO $tableName (nombre) VALUES "."('$nombre')";
		$m = new Master();
		$m->insertRegister($sql);
		return $m->idR;
	}


/*******************************************************************************
 *************************************setters***********************************
 ******************************************************************************/

/**
 * Método que actualiza el nombre de una serie.
 * @param $nombre cadena de carácteres que representa el nombre de la serie.
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
 * Método que regresa el nombre de una serie.
 * @return nombre, el nombre de la serie.
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
