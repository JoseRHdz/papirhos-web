<?php

require_once "Persona.php";

/**
 * Clase que modela a un autor, hereda de la clase "persona".
 * @author José Roberto Hernández Alvarez
 * @author 
 * @author 
 * @version 1.0
 */
class Autor extends Persona {

	private $idA;

/**
 * Método constructor.
 */
	public function __construct ($idA) {
		$this->idA = $idA;
		$this->tableName = "Autor";
		$this->id = $idA;
	}


/**
 * Método que registra un nuevo autor en la base de datos.
 * @param $nombre cadena de carácteres que representa el nombre del autor.
 * @param $apellidoP cadena de carácteres que representa el apellido paterno del
 					autor.
 * @param $apellidoM cadena de carácteres que representa el apellido materno del
 					autor.
 * @param $nombreLegal cadena de carácteres que reprtesenta el nombre legal del
 					autor (nombre real en algunos casos).
 */
	public static function newAutor ($nombre, $apellidoP, $apellidoM, 
																			 $nombreLegal) {
		$tableName = "Autor";

		$sql = "INSERT INTO $tableName
						(nombre,apellidoP,apellidoM,nombreLegal) VALUES ".
					 "(
					 	 '$nombre', '$apellidoP', '$apellidoM', '$nombreLegal'
						)";
		$m = new Master();
		$m->insertRegister($sql);
		return $m->idR;
	}

/*******************************************************************************
 *************************************setters***********************************
 ******************************************************************************/

/**
 * Método que actualiza el nombbre legal de un autor.
 * @param $nombreLegal cadena de carácteres que representa el nombre legal del 
 					autor
 */
	public function setNLegal ($nombreLegal) {
		$sql = "UPDATE $this->tableName SET nombreLegal = '$nombreLegal' WHERE 
																												 id = '$this->idA'";
		parent::insertRegister($sql);
	}


/*******************************************************************************
 *************************************getters***********************************
 ******************************************************************************/

/**
 * Método que obtiene el nombre legal de un autor.
 * @return nombreLegal variable que contiene el nombre legal del autor que se
 					 obtiene de la base de datos.
 */
	public function getNLegal () {
		$sql = "SELECT nombreLegal From $this->tableName WHERE id = '$this->idA'";
		parent::selectRegister($sql);
		return $this->result->nombreLegal;
	}

/**
 * Método destructor.
 */
	public function __destruct () {
	}

}//END_Autor

?>
