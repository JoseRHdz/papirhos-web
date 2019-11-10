<?php

require_once "Persona.php";

/**
 * Clase que modela a un usuario, extiende de la clase "Persona".
 * @author José Roberto Hernández Alvarez
 * @author 
 * @author 
 * @version 1.0
 */
class Usuario extends Persona {

	private $idU;

/**
 * Constructor de la clase.
 * @param $idU un entero que representa el identificador de un usuario.
 */
	public function __construct (int $idU) {
		$this->idU = $idU;
		$this->tableName = "Usuario";
		$this->id = $idU;
	}

/**
 * Método que crea un nuevo usuario y lo guarda en la base de datos.
 * @param $nombre cadena de carácteres que representa el nombre del usuario.
 * @param $apellidoP cadena de carácteres que representa el apellido paterno del 
 	 				usuario.
 * @param $apellidoM cadena de carácteres que representa el apellido materno del 
 	 				usuario.
 * @param $email cadena de carácteres que representa el correo eléctronico del 
 	 				usuario.
 * @param $password cadena de carácteres que representa la contraseña del 
 					usuario.
 * @param $tipo cadena de carácteres que representa el papel que desempeña el 
 					usuario en el sistema (administrador o vendedor).
 * @param $estatus entero que representa si el usuario está activo o no en el 
 					sistema.
 * @return idR variable de tipo entero que contiene el identificador que se le
 					 asigna al usuario al momento de guardarlo en la base de datos.
 */
	public static function newUsuario ($nombre, $apellidoP, $apellidoM, $email,
																		 $password, $tipo, $estatus) {
		$tableName = "Usuario";

		$passwordN = self::cryptPassword($password);
		$sql = "INSERT INTO $tableName 
						(nombre,apellidoP,apellidoM,email,password,tipo,estatus) VALUES ".
					 "(
					 	 '$nombre', '$apellidoP', '$apellidoM', '$email', '$passwordN', 
						 '$tipo', '$estatus'
						)";
		$m = new Master();
		$m->insertRegister($sql);
		return $m->idR;
	}

/**
 * Método que encripta una contraseña.
 * @param $password una cadena de carácteres a encriptar.
 */
	private static function cryptPassword($password) {
		$newPassword = password_hash($password,PASSWORD_DEFAULT,
																		['cost' => 10]);
		return $newPassword;
	}



/*******************************************************************************
 *************************************setters***********************************
 ******************************************************************************/

/**
 * Método que actualiza el correo eléctronico de un usuario.
 * @param $email cadena de carácteres que representa el correo eléctronico del
 					usuario.
 */
	public function setEmail ($email) {
		$sql = "UPDATE $this->tableName SET email = '$email' WHERE id =
																																 '$this->idU'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza la contraseña de un usuario.
 * @param $password cadena de carácteres que representa la contraseña del 
 					usuario.
 */
	public function setPassword ($password) {
		$password = self::cryptPassword($password);
		$sql = "UPDATE $this->tableName SET password = '$password' WHERE id =
																																 '$this->idU'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el tipo que tiene un usuario.
 * @param $tipo cadena de carácteres que representa el papel que desempeña el
 					usuario en el sistema.
 */
	public function setTipo ($tipo) {
		$sql = "UPDATE $this->tableName SET tipo = '$tipo' WHERE id =
																																 '$this->idU'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el estatus de un usuario.
 * @param $estatus entero que representa si el usuario está activo o no en el 
 					sistema.
 */
	public function setEstatus ($estatus) {
		$sql = "UPDATE $this->tableName SET estatus = '$estatus' WHERE id =
																																 '$this->idU'";
		parent::insertRegister($sql);
	}



/*******************************************************************************
 *************************************getters***********************************
 ******************************************************************************/

/**
 * Método que obtiene el correo eléctronico de un usuario.
 * @return email el correo eléctronico del usuario.
 */
	public function getEmail () {
		$sql = "SELECT email From $this->tableName WHERE id = '$this->idU'";
		parent::selectRegister($sql);
		return $this->result->email;
	}

/**
 * Método que obtiene la contraseña de un usuario.
 * @return password la contraseña del usuario.
 */
	private function getPassword () {
		$sql = "SELECT password From $this->tableName WHERE id = '$this->idU'";
		parent::selectRegister($sql);
		return $this->result->password;
	}

/**
 * Método que obtiene el tipo que tiene un usuario.
 * @return tipo tipo del usuario.
 */
	public function getTipo () {
		$sql = "SELECT tipo From $this->tableName WHERE id = '$this->idU'";
		parent::selectRegister($sql);
		return $this->result->tipo;
	}

/**
 * Método que obtiene el estatus usuario.
 * @return estatus el estatus del usuario.
 */
	public function getEstatus () {
		$sql = "SELECT estatus From $this->tableName WHERE id = '$this->idU'";
		parent::selectRegister($sql);
		return $this->result->estatus;
	}

/**
 * Destructor.
 */
	public function __destruct () {
	}

}//END_Usuario

?>
