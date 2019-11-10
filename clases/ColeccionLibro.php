<?php

require_once "Master.php";

/**
 * Clase que modela la relación entre un libro (versión) y una colección, 
 * hereda de la clase "Master".
 * @author José Roberto Hernández Alvarez
 * @author 
 * @author 
 * @version 1.0
 */
class ColeccionLibro extends Master {

	private $id;
	private $tableName;

/**
 * Constructor.
 * @param $id entero que representa el identificador del registro.
 */
	public function __construct (int $id) {
		$this->tableName = "ColeccionLibro";
		$this->id = $id;
	}

/**
 * Método que agrega una nueva relación de un libro (versión) con una colección
 * a la base de datos.
 * @param $idV entero que representa el identificador de la versión del libro.
 * @param $idC entero que representa el identificador de la colección.
 */
	public static function newColeccionLibro ($idV,$idC) {
		$tableName = "ColeccionLibro";

		$sql = "INSERT INTO $tableName (Version_id,Coleccion_id) VALUES 
																	 ($idV,$idC)";
		$m = new Master();
		$m->insertRegister($sql);
		return $m->idR;
	}

/*******************************************************************************
 *************************************setters***********************************
 ******************************************************************************/

/**
 * Método que actualiza el identificador de una versión de un libro.
 * @param $idV entero que representa el identificador de la versión de un libro.
 */
	public function setIdV ($idV) {
		$sql = "UPDATE $this->tableName SET Version_id = '$idV' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el identificador de una colección.
 * @param $idC entero que representa el identificador de una colección.
 */
	public function setIdC ($idC) {
		$sql = "UPDATE $this->tableName SET Coleccion_id = '$idC' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/*******************************************************************************
 *************************************getters***********************************
 ******************************************************************************/

/**
 * Método que obtiene el identificador de una versión de un libro.
 * @return Version_id entero que representa el identificador de la versión de un
 * libro.
 */
	public function getIdV () {
		$sql = "SELECT Version_id From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->Version_id;
	}

/**
 * Método que obtiene el identificador de una colección.
 * @return Colección_id entero que representa el identificador de la colección.
 */
	public function getIdC () {
		$sql = "SELECT Coleccion_id From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->Coleccion_id;
	}

/**
 * Destructor.
 */
	public function __destruct () {
	}

}

?>
