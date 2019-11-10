<?php

require_once "Master.php";

/**
 * Clase que modela a una persona, esta clase extiende a la clase Master.
 * @author José Roberto Hernández Alvarez.
 * @author
 * @author
 * @version 1.0
 */
class Persona extends Master {

	protected $tableName;
	protected $id;



/*******************************************************************************
 *************************************setters***********************************
 ******************************************************************************/

/**
 * Método que establece el nombre de una persona.
 * @param $nombre una cadena de carácteres que representa el nombre de la 
 * persona.
 */
	public function setNombre ($nombre) {
		$sql = "UPDATE $this->tableName SET nombre = '$nombre' WHERE 
																													   id = '$this->id'";
		parent::insertRegister($sql);
	}


/**
 * Método que establece el apellido paterno de una persona.
 * @param $apellidoP una cadena de carácteres que representa el apellido paterno 
 * de la persona.
 */
	public function setApellidoP ($apellidoP) {
		$sql = "UPDATE $this->tableName SET apellidoP = '$apellidoP' WHERE 
																													   id = '$this->id'";
		parent::insertRegister($sql);
	}


/**
 * Método que establece el apellido materno de una persona.
 * @param $apellidoM una cadena de carácteres que representa el apellido materno 
 * de la persona.
 */
	public function setApellidoM ($apellidoM) {
		$sql = "UPDATE $this->tableName SET apellidoM = '$apellidoM' WHERE 
																														 id = '$this->id'";
		parent::insertRegister($sql);
	}
	


/*******************************************************************************
 *************************************getters***********************************
 ******************************************************************************/

/**
 * Método que obtiene el nombre de una persona.
 * @return $result->nombre el nombre de la persona.
 */
	public function getNombre () {
		$sql = "SELECT nombre FROM $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->nombre;
	}

/**
 * Método que obtiene el apellido paterno de una persona.
 * @return apellidoP el registro de la tabla "Usuario" que contiene el apellido 
 * paterno de la persona.
 */
	public function getApellidoP () {
		$sql = "SELECT apellidoP FROM $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->apellidoP;
	}

/**
 * Método que obtiene el apellido materno de una persona.
 * @return apellidoM el registro de la tabla "Usuario" que contiene el apellido 
 * materno de la persona.
 */
	public function getApellidoM () {
		$sql = "SELECT apellidoM FROM $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->apellidoM;
	}
}//END_Persona

?>
