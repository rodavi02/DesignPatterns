<?php
class ConnectDb {
  // creamos la instancia
	public static $instance = null;
	public $conn;
	public $host = 'localhost';
	public $user = 'administrador';
	public $pass = 'administrador';
	public $name = 'tienda';
	
	public function __construct() {
    		$this->conn = new PDO("mysql:host={$this->host};
    		dbname={$this->name}", $this->user,$this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    	}
	
  	public static function getInstance() {
    		if(!self::$instance) {
    			self::$instance = new ConnectDb();
    		}	
    		return self::$instance;
	}
	
	public function getConnection() {
		return $this->conn;
	}
}
//creamos 3 objetos para conectarmos a la base de datos, aunque solamente se conectara 1 vez debido a que usamos el patron de diseño singleton con PDO
$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

?>
