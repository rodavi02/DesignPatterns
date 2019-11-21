<?php
class Conexion {
  // creamos la instancia
	private static $instancia = null;
	private $conn;
	private $host = 'localhost';
	private $usuario = 'administrador';
	private $pass = 'administrador';
	private $dbname = 'tienda';
	#private $puerto='3344';
	
	public function __construct() {
    		$this->conn = new PDO("mysql:host={$this->host}; /*port={$this->puerto}; */dbname={$this->dbname}", $this->usuario, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    	}
	
  	public static function getInstancia() {
    		if(!self::$instancia) {
    			self::$instancia = new Conexion();
    		}	
    		return self::$instancia;
	}
	
	public function getConexion() {
		return $this->conn;
	}
}
//creamos 3 objetos para conectarmos a la base de datos, aunque solamente se conectara 1 vez debido a que usamos el patron de diseño singleton con PDO
$instancia = Conexion::getInstancia();
$conn = $instancia->getConexion();
var_dump($conn);
$instancia = Conexion::getInstancia();
$conn = $instancia->getConexion();
var_dump($conn);
$instancia = Conexion::getInstancia();
$conn = $instancia->getConexion();
var_dump($conn);
?>
