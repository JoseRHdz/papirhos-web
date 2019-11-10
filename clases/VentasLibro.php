<?php

require_once "Master.php";

/**
 * Clase que modela una venta, es la relación entre un libro (versión),
 * un comprador y un vendedor, hereda de la clase "Master".
 * @author José Roberto Hernández Alvarez
 * @author 
 * @author 
 * @version 1.0
 */
class VentasLibro extends Master {

	private $id;
	private $tableName;

/**
 * Constructor.
 * @param $id entero que representa el identificador del registro de la tabla.
 */
	public function __construct (int $id) {
		$this->tableName = "VentasLibro";
		$this->id = $id;
	}

/**
 * Método que inserta una nueva venta en la base de datos.
 * @param $idU entero que representa el identificador del vendedor (usuario).
 * @param $idC entero que representa el identificador del comprador.
 * @param $idV entero que representa el identificador de un libro (versión).
 * @param $cantidad entero que representa la cantidad vendida de un mismo libro
 * (versión).
 * @param $fecha variable de tipo "date" que representa la fecha de la venta.
 * @param $tipoP cadena de carácteres que representa el tipo de precio vendido
 * (precio de lista, desc1, desc2).
 * @param $precio variable de tipo "float" que representa el precio en que se
 * vendió el libro en ese momento.
 * @param $recibo archivo de imagen que representa el recibo impreso, esta
 * columna desaparecerá en un futuro.
 */
	public static function newVentasLibro ($idU,$idC,$idV,$cantidad,$fecha,
																				 $tipoP,$precio,$recibo) {
		$tableName = "VentasLibro";

		$sql = "INSERT INTO $tableName (Usuario_id,Comprador_id,Version_id,
																		cantidad,fecha,tipoPrecio,precio,recibo) 
														VALUES 
																	 ($idU,$idC,$idV,$cantidad,'$fecha','$tipoP',
																	 	$precio,'$recibo')";
		$m = new Master();
		$m->insertRegister($sql);
		return $m->idR;
	}


/*******************************************************************************
 *************************************setters***********************************
 ******************************************************************************/

/**
 * Método que actualiza el identificador de un vendedor (usuario).
 * @param $idU entero que representa el identificador del vendedor.
 */
	public function setIdU ($idU) {
		$sql = "UPDATE $this->tableName SET Usuario_id = '$idU' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el identificador de un comprador.
 * @param $idC entero que representa el identificador del comprador.
 */
	public function setIdC ($idC) {
		$sql = "UPDATE $this->tableName SET Comprador_id = '$idC' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el identificador de la versión de un libro.
 * @param $idV entero que representa el identificador de al versión de un libro.
 */
	public function setIdV ($idV) {
		$sql = "UPDATE $this->tableName SET Version_id = '$idV' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza la cantidad de un mismo libro (versión) vendido en una 
 * sola venta.
 * @param $cantidad entero que representa la cantidad de un mismo libro
 * (versión) vendido.
 */
	public function setCantidad ($cantidad) {
		$sql = "UPDATE $this->tableName SET cantidad = '$cantidad' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza la fecha de la venta.
 * @param $fecha variable de tipo "date" que representa la fecha de la venta.
 */
	public function setFecha ($fecha) {
		$sql = "UPDATE $this->tableName SET fecha = '$fecha' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el tipo de precio en que se vendió el libro (versión).
 * @param $tipoP cadena de carácteres que representa el tipo de precio en que
 * fue vendido el libro (versión).
 */
	public function setTipoP ($tipoP) {
		$sql = "UPDATE $this->tableName SET tipoPrecio = '$tipoP' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el precio en que el libro (versión) fue vendido en ese 
 * momento.
 * @param $precio flotante que representa el precio que fue vendido en el 
 * momento de la venta.
 */
	public function setPrecio ($precio) {
		$sql = "UPDATE $this->tableName SET precio = $precio WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el recibo impreso.
 * @param $recibo archivo de imagen que representa el recibo impreso.
 */
	public function setRecibo ($recibo) {
		$sql = "UPDATE $this->tableName SET recibo = '$recibo' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}


/*******************************************************************************
 *************************************getters***********************************
 ******************************************************************************/

/**
 * Método que regresa el identificador del vendedor (usuario).
 * @return Usuario_id el identificador del vendedor (usuario).
 */
	public function getIdU () {
		$sql = "SELECT Usuario_id From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->Usuario_id;
	}

/**
 * Método que regresa el identificador del comprador.
 * @return Comprador_id el identificador del comprador.
 */
	public function getIdC () {
		$sql = "SELECT Comprador_id From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->Comprador_id;
	}

/**
 * Método que regresa el identificador del libro (versión).
 * @return Version_id el identificador del vendedor (versión).
 */
	public function getIdV () {
		$sql = "SELECT Version_id From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->Version_id;
	}

/**
 * Método que regresa la cantidad vendida del mismo libro.
 * @return cantidad, el número vendido del mismo libro.
 */
	public function getCantidad () {
		$sql = "SELECT cantidad From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->cantidad;
	}

/**
 * Método que regresa la fecha de la venta.
 * @return fecha, el momento en que se realizó la venta.
 */
	public function getFecha () {
		$sql = "SELECT fecha From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->fecha;
	}

/**
 * Método que regresa tipo de precio de la venta.
 * @return tipoPrecio, el tipo de precio de la venta.
 */
	public function getTipoP () {
		$sql = "SELECT tipoPrecio From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->tipoPrecio;
	}

/**
 * Método que regresa el precio en el momento de la venta.
 * @return precio, el precio en el momento de la venta.
 */
	public function getPrecio () {
		$sql = "SELECT precio From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->precio;
	}

/**
 * Método que regresa el recibo impreso.
 * @return recibo, comprobante impreso de la venta.
 */
	public function getRecibo () {
		$sql = "SELECT recibo From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->recibo;
	}

/**
 * Destructor.
 */
	public function __destruct () {
	}

}

?>
