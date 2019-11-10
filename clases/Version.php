<?php

require_once "Master.php";

/**
 * Clase que modela la versión de un libro, hereda de la clase "Master".
 * @author José Roberto Hernández Alvarez
 * @author 
 * @author 
 * @version 1.0
 */
class Version extends Master {

	private $id;
	private $tableName;

/**
 * Constructor.
 * @param $id entero que representa el identificador del registro de la tabla.
 */
	public function __construct (int $id) {
		$this->tableName = "Version";
		$this->id = $id;
	}

/**
 * Método que inserta una nueva versión de un libro.
 * @param $libroId entero que representa el identificador de un libro.
 * @param $isbn cadena de carácteres que representa el identificador universal
 * (ISBN) de un libro.
 * @param $edicion entero que representa la edición de la versión.
 * @param $precio flotante que representa el precio del libro.
 * @param $reserva entero que representa los libros que no están disponibles
 * para vender.
 * @param $fecha variable de tipo "date" que representa la fecha de publicación
 * del libro.
 * @param $formato cadena de carácteres que representa el formato de un libro
 * (pasta dura, pasta blanda, digital).
 * @param $portada archivo de imagen que representa la portada del libro.
 * @param $nota cadena de carácteres que representa alguna anotación sobre el
 * libro.
 */
	public static function newVersion ($libroId,$isbn,$edicion,$precio,$reserva,
																		 $fecha,$formato,$portada,$nota) {
		$tableName = "Version";

		$sql = "INSERT INTO $tableName 
						(Libro_id,ISBN,edicion,precioLista,reserva,fecha,formato,
						 portada,nota) VALUES 
						 ('$libroId','$isbn','$edicion','$precio','$reserva','$fecha',
						 	'$formato','$portada','$nota')";
		$m = new Master();
		$m->insertRegister($sql);
		return $m->idR;
	}


/*******************************************************************************
 *************************************setters***********************************
 ******************************************************************************/

/**
 * Método que actualiza el identificador de un libro.
 * @param $libroId entero que representa el identificador de un libro.
 */
	public function setLibroId ($libroId) {
		$sql = "UPDATE $this->tableName SET Libro_id = '$libroId' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el identificador universal (ISBN) de un libro.
 * @param $isbn cadena de carácteres que representa el identificador universal 
 * (ISBN) de un libro.
 */
	public function setISBN ($isbn) {
		$sql = "UPDATE $this->tableName SET isbn = '$isbn' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el numero de edición de un libro.
 * @param $edicion entero que representa la edición de un libro.
 */
	public function setEdicion ($edicion) {
		$sql = "UPDATE $this->tableName SET edicion = '$edicion' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el precio de un libro.
 * @param $libroId flotante que representa el precio de un libro.
 */
	public function setPrecio ($precio) {
		$sql = "UPDATE $this->tableName SET precio = '$precio' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza la reserva de un libro.
 * @param $reserva entero que representa la reserva de un libro.
 */
	public function setReserva ($reserva) {
		$sql = "UPDATE $this->tableName SET reserva = '$reserva' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el identificador de un libro.
 * @param $libroId entero que representa el identificador de un libro.
 */
	public function setFecha ($fecha) {
		$sql = "UPDATE $this->tableName SET fecha = '$fecha' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el identificador de un libro.
 * @param $libroId entero que representa el identificador de un libro.
 */
	public function setFormato ($formato) {
		$sql = "UPDATE $this->tableName SET formato = '$formato' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el identificador de un libro.
 * @param $libroId entero que representa el identificador de un libro.
 */
	public function setPortada ($portada) {
		$sql = "UPDATE $this->tableName SET portada = '$portada' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}

/**
 * Método que actualiza el identificador de un libro.
 * @param $libroId entero que representa el identificador de un libro.
 */
	public function setNota ($nota) {
		$sql = "UPDATE $this->tableName SET nota = '$nota' WHERE id =
																																 '$this->id'";
		parent::insertRegister($sql);
	}


/*******************************************************************************
 *************************************getters***********************************
 ******************************************************************************/

/**
 * Método que regresa el identificador de un libro.
 * @return Libro_id, el identificador de el libro.
 */
	public function getLibroId () {
		$sql = "SELECT Libro_id From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->Libro_id;
	}

/**
 * Método que regresa el identificador universal (ISBN) de un libro.
 * @return isbn, el identificador universal (ISBN) de el libro.
 */
	public function getISBN () {
		$sql = "SELECT isbn From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->isbn;
	}

/**
 * Método que regresa número de edición de un libro.
 * @return edicion, el número de edición de el libro.
 */
	public function getEdicion () {
		$sql = "SELECT edicion From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->edicion;
	}

/**
 * Método que regresa el precio de un libro.
 * @return precioLista, el precio de el libro.
 */
	public function getPrecio () {
		$sql = "SELECT precioLista From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->precioLista;
	}

/**
 * Método que regresa la reserva de un libro.
 * @return reserva, la reserva de el libro.
 */
	public function getReserva () {
		$sql = "SELECT reserva From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->reserva;
	}

/**
 * Método que regresa la fecha de publicación de un libro.
 * @return fecha, la fecah de publicación de el libro.
 */
	public function getFecha () {
		$sql = "SELECT fecha From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->fecha;
	}

/**
 * Método que regresa el formato (pasta blanda, pasta dura, digital) de un libro.
 * @return formato, el formato (pasta blanda, pasta dura, digital) de el libro.
 */
	public function getFormato () {
		$sql = "SELECT formato From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->formato;
	}

/**
 * Método que regresa la portada de un libro.
 * @return portada, la portada de el libro.
 */
	public function getPortada () {
		$sql = "SELECT portada From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->portada;
	}

/**
 * Método que regresa la anotación de un libro.
 * @return nota, la anotación de el libro.
 */
	public function getNota () {
		$sql = "SELECT nota From $this->tableName WHERE id = '$this->id'";
		parent::selectRegister($sql);
		return $this->result->nota;
	}

/**
 * Destructor.
 */
	public function __destruct () {
	}

}

?>
