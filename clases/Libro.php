<?php

require_once "Master.php";

/**
 * Clase que modela libro, hereda de la clase "Master".
 * @author José Roberto Hernández Alvarez
 * @author 
 * @author 
 * @version 1.0
 */
class Libro extends Master {

	private $id;
	private $tableName;

/**
 * Constructor.
 * @param $id entero que representa el identificador del registro.
 */
	public function __construct (int $id) {
		$this->tableName = "Libro";
		$this->id = $id;
	}

/**
 * Método que inserta un nuevo libro en la base de datos.
 * @param $titulo cadena de carácteres que representa el título del libro.
 */
	public static function newLibro ($titulo) {
		$tableName = "Libro";

		$sql = "INSERT INTO $tableName (titulo) VALUES "."('$titulo')";
		$m = new Master();
		$m->insertRegister($sql);
		return $m->idR;
	}


/*******************************************************************************
 *************************************setters***********************************
 ******************************************************************************/

/**
 * Método que actualiza el título de un libro.
 * @param $titulo cadena de carácteres que representa el título de un libro.
 */
	public function setTitulo ($titulo) {
		$sql = "UPDATE $this->tableName SET titulo = '$titulo' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}


/*******************************************************************************
 *************************************getters***********************************
 ******************************************************************************/

/**
 * Método que regresa el título de un libro.
 * @return titulo, cadena de carácteres que representa el título de un libro.
 */
	public function getTitulo () {
		$sql = "SELECT titulo From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->titulo;
	}

/**
 * Destructor.
 */
	public function __destruct () {
	}

}

?>
