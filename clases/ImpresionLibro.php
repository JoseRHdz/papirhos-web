<?php

require_once "Master.php";

/**
 * Clase que modela la relación entre un libro (versión) y una imprenta, 
 * hereda de la clase "Master".
 * @author José Roberto Hernández Alvarez
 * @author 
 * @author 
 * @version 1.0
 */
class ImpresionLibro extends Master {

	private $id;
	private $tableName;

/**
 * Constructor.
 * @param $id entero que representa el identificador del registro de la tabla.
 */
	public function __construct (int $id) {
		$this->tableName = "ImpresionLibro";
		$this->id = $id;
	}

/**
 * Método que inserta una relación entre un libro (versión) y una imprenta.
 * @param $idV entreo que representa el identificador de la versión del libro.
 * @param $idI entero que representa el identificador de la imprenta.
 * @param $impresion entero que representa el número de impresión que se ha
 * hecho del libro (versión)
 * @param $fecha variable de tipo "date" que representa la fecha en que el libro
 * fue impreso.
 * @param $ejemplares entero que representa la cantidad de ejemplares que se
 * imprimeron de un libro.
 */
	public static function newImpresionLibro ($idV,$idI,$impresion,$fecha,
																						$ejemplares) {
		$tableName = "ImpresionLibro";

		$sql = "INSERT INTO $tableName (Version_id,Imprenta_id,impresion,fecha,
																		ejemplares) VALUES 
																	 ($idV,$idI,$impresion,'$fecha',$ejemplares)";
		$m = new Master();
		$m->insertRegister($sql);
		return $m->idR;
	}


/*******************************************************************************
 *************************************setters***********************************
 ******************************************************************************/

/**
 * Método que actualiza el identificador de un libro (versión)
 * @param $idV entero que representa el identificador de la versión de un libro.
 */
	public function setIdV ($idV) {
		$sql = "UPDATE $this->tableName SET Version_id = '$idV' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el identificador de una imprenta.
 * @param $idI entero que representa el identificador de la imprenta.
 */
	public function setIdI ($idI) {
		$sql = "UPDATE $this->tableName SET Imprenta_id = '$idI' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el número de impresión de un libro (versión).
 * @param $impresion entero que representa el número de impresión.
 */
	public function setImpresion ($impresion) {
		$sql = "UPDATE $this->tableName SET impresion = '$nombre' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza la fecha de impresión de un libro.
 * @param $fecha variable de tipo "date" que representa la fecha de impresión.
 */
	public function setFecha ($fecha) {
		$sql = "UPDATE $this->tableName SET fecha = '$nombre' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el número de ejemplares impresos.
 * @param $ejemplares entero que representa el número de ejemplares impresos.
 */
	public function setEjemplares ($ejemplares) {
		$sql = "UPDATE $this->tableName SET ejemplares = '$nombre' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}


/*******************************************************************************
 *************************************getters***********************************
 ******************************************************************************/

/**
 * Método que regresa el identificador de una versión de un libro.
 * @return Version_id, identificador de la versión del libro.
 */
	public function getIdV () {
		$sql = "SELECT Version_id From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->Version_id;
	}

/**
 * Método que regresa el identificador de una imprenta.
 * @return Imprenta_id, identificador de la imprenta.
 */
	public function getIdI () {
		$sql = "SELECT Imprenta_id From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->Imprenta_id;
	}

/**
 * Método que regresa el número de impresiones de un libro.
 * @return impresion, el número de impresión de un libro (versión).
 */
	public function getImpresion () {
		$sql = "SELECT impresion From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->impresion;
	}

/**
 * Método que regresa la fecha de impresión de un libro (versión).
 * @return fecha, la fecha de impresión de un libro (versión).
 */
	public function getFecha () {
		$sql = "SELECT fecha From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->fecha;
	}

/**
 * Método que regresa el número de ejemplares impresos.
 * @return ejemplares, el número de ejemplares impresos.
 */
	public function getEjemplares () {
		$sql = "SELECT ejemplares From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->ejemplares;
	}

/**
 * Destructor.
 */
	public function __destruct () {
	}

}

?>
