<?php

require_once "Master.php";

/**
 * Clase que modela la relación entre un libro (versión) y una serie, hereda de 
 * la clase "Master".
 * @author José Roberto Hernández Alvarez
 * @author 
 * @author 
 * @version 1.0
 */
class SerieLibro extends Master {

	private $id;
	private $tableName;

/**
 * Constructor.
 * @param $id entero  que representa el identificador de un registro de la tabla.
 */
	public function __construct (int $id) {
		$this->tableName = "SerieLibro";
		$this->id = $id;
	}

/**
 * Método que inserta una nueva relación entre un libro (versión) y una serie.
 * @param $idV entero que representa el identificador de la versión de un libro.
 * @param $idS entero que representa el identificador de una serie.
 */
	public static function newSerieLibro ($idV,$idS) {
		$tableName = "SerieLibro";

		$sql = "INSERT INTO $tableName (Version_id,Serie_id) VALUES 
																	 ($idV,$idS)";
		$m = new Master();
		$m->insertRegister($sql);
		return $m->idR;
	}


/*******************************************************************************
 *************************************setters***********************************
 ******************************************************************************/

/**
 * Método que actualiza el identificador de una versión.
 * @param $idV entero que representa el identificador de la versión del libro.
 */
	public function setIdV ($idV) {
		$sql = "UPDATE $this->tableName SET Version_id = '$idV' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el identificador de una serie.
 * @param $idS entero que representa el identificador de una serie.
 */
	public function setIdS ($idS) {
		$sql = "UPDATE $this->tableName SET Serie_id = '$idS' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}


/*******************************************************************************
 *************************************getters***********************************
 ******************************************************************************/

/**
 * Método que regresa el identificador de una versión de un libro.
 * @return Version_id, identificador de la versión.
 */
	public function getIdV () {
		$sql = "SELECT Version_id From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->Version_id;
	}

/**
 * Método que regresa el identificador de una serie.
 * @return Serie_id, identificador de la serie.
 */
	public function getIdS () {
		$sql = "SELECT Serie_id From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->Serie_id;
	}

/**
 * Destructor.
 */
	public function __destruct () {
	
	}

}

?>
