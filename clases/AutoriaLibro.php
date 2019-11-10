<?php

require_once "Master.php";

/**
 * Clase que modela la relación entre un libro (versión) y su autor, hereda de 
 * la clase "persona".
 * @author José Roberto Hernández Alvarez
 * @author 
 * @author 
 * @version 1.0
 */
class AutoriaLibro extends Master {

	private $id;
	private $tableName;

/**
 * Constructor.
 * @param $id entero que representa el id del registro de la tabla.
 */
	public function __construct (int $id) {
		$this->tableName = "AutoriaLibro";
		$this->id = $id;
	}

/**
 * Método que relaciona un autor con un libro (versión).
 * @param $idA entero identificador del autor.
 * @param $idV entero identificador de la versión del libro.
 */
	public static function newAutoriaLibro ($idA,$idV) {
		$tableName = "AutoriaLibro";

		$sql = "INSERT INTO $tableName (Autor_id,Version_id) VALUES ($idA,$idV)";
		$m = new Master();
		$m->insertRegister($sql);
		return $m->idR;
	}


/*******************************************************************************
 *************************************setters***********************************
 ******************************************************************************/

/**
 * Método que actualiza el identificador del autor.
 * @param $idA entero identificador del autor.
 */
	public function setIdA ($idA) {
		$sql = "UPDATE $this->tableName SET Autor_id = '$idA' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el identificador de la versión del libro.
 * @param $idV entero identificador de la versión del libro.
 */
	public function setIdV ($idV) {
		$sql = "UPDATE $this->tableName SET Version_id = '$idV' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}


/*******************************************************************************
 *************************************getters***********************************
 ******************************************************************************/

/**
 * Método que regresa el identificador del autor.
 * @return Autor_id entero identificador del autor.
 */
	public function getIdA () {
		$sql = "SELECT Autor_id From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->Autor_id;
	}

/**
 * Método que regresa el identificador de la versión del libro.
 * @return Version_id entero identificador de la versión del libro.
 */
	public function getIdV () {
		$sql = "SELECT Version_id From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->Version_id;
	}

/**
 * Destructor.
 */
	public function __destruct () {
	}

}

?>
