<?php

require_once "Master.php";

/**
 * Clase que modela una colección, hereda de la clase "Master".
 * @author José Roberto Hernández Alvarez
 * @author 
 * @author 
 * @version 1.0
 */
class Coleccion extends Master {

	private $id;
	private $tableName;

/**
 * Constructor.
 * @param $id entero identificador del registro. 
 */
	public function __construct (int $id) {
		$this->tableName = "Coleccion";
		$this->id = $id;
	}

/**
 * Método que crea una nueva colección.
 * @param $isbn cadena de carácteres que representa el isbn de una colección.
 * @param $nombre cadena de carácteres que representa el nombre de la colección.
 */
	public static function newColeccion ($isbn,$nombre) {
		$tableName = "Coleccion";

		$sql = "INSERT INTO $tableName (isbn,nombre) VALUES "."('$isbn','$nombre')";
		$m = new Master();
		$m->insertRegister($sql);
		return $m->idR;
	}


/*******************************************************************************
 *************************************setters***********************************
 ******************************************************************************/

/**
 * Método que actualiza el isbn de una colección.
 * @param $isbn cadena de carácteres que representa el isbn de una colección.
 */
	public function setISBN ($isbn) {
		$sql = "UPDATE $this->tableName SET isbn = '$isbn' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el nombre de una colección.
 * @param $nombre cadena de carácteres que representa el nombre de una colección.
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
 * Método que obtiene el nombre de una colección.
 * @return nombre, cadena de carácteres que representa el nombre de una 
 * colección.
 */
	public function getNombre () {
		$sql = "SELECT nombre From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->nombre;
	}

/**
 * Método que obtiene el isbn de una colección.
 * @return isbn cadena de carácteres que representa el isbn de una colección.
 */
	public function getISBN () {
		$sql = "SELECT isbn From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->isbn;
	}

/**
 * Destructor.
 */
	public function __destruct () {
	}

}

?>
