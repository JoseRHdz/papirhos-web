<?php
/**
 * Clase Principal para las conexión, consultas y operaciones a la base de datos.
 * @author José Roberto Hernández Alvarez
 * @author 
 * @author 
 * @version 1.0
 */
class Master {

	private $conn;
	private $sql;
	//Cuando se inserta un nuevo registro, esta variable contiene el id de este.
	protected $idR;
	protected $result;


/**
 * Método para hacer una conexión a la base dedatos.
 */
	private function connect() {
		$conf = require $_SERVER['DOCUMENT_ROOT']."/papirhos-web/config.php";
		$this->conn = new mysqli($conf["db_host"],$conf["db_user"],$conf["db_pass"],
														 $conf["db_name"]);

		if ($this->conn->connect_error){
			die("Falló la conexión: " . $conn->connect_error);
		}
		//echo "Conexión exitosa";
	}


/**
 * Método estático para hacer una conexión a la base de datos.
 */
	private static function connect1() {
		$conf = require $_SERVER['DOCUMENT_ROOT']."/papirhos-web/config.php";
		$this->conn = new mysqli($conf["db_host"],$conf["db_user"],$conf["db_pass"],
														 $conf["db_name"]);

		if ($this->conn->connect_error){
			die("Falló la conexión: " . $conn->connect_error);
		}
		//echo "Conexión exitosa";
	}


/**
 * Método que inserta o actualiza un registro en alguna tabla de la base de
 * datos.
 * @param $sql una cadena de carácteres que representa la instrucción SQL.
 * (INSERT INTO ...) (UPDATE ...).
 */
	public function insertRegister($sql) {
		self::connect();
		if ($this->conn->query($sql)){
			echo "Inserción exitosa<br>";
			$this->idR = $this->conn->insert_id;
			
		}
		else {
			echo "No se pudo insertar".$sql."<br>".$this->conn->error;
		}
		$this->conn->close();
	}


/**
 * Método que selecciona un registro de una tabla de la base de datos.
 * @param $sql cadena de carácteres que representa la consulta.
 * (SELECT FROM ...).
 */
	public function selectRegister($sql) {
		self::connect();
		$result = $this->conn->query($sql);
		$obj = $result->fetch_object();
		$this->result = $obj;
		$this->conn->close();
	}


/**
 * Método que hace una consulta a una tabla de la base de datos.
 * Se recomienda usar esta función cuando la consulta sea general y no sea llama
 * da desde una clase hija de esta.
 * @param $sql cadena de carácteres que representa la consulta.
 * @return $result un objeto de tipo mysqli_result que contiene la información
 * de la consulta hecha.
 */
	public function makeQuery ($sql) {
		self::connect();
		$result = $this->conn->query($sql);
		$this->conn->close();
		return $result;
	}

}//END_Master

?>
