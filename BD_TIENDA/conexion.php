<?php
class Conexion {
	// Hold the class instance.
	private static $instance = null;
	private $conn;
	private $host = 'localhost';
	private $user = 'tienda';
	private $pass = 'tienda1';
	private $name = 'tienda';
	  
	// The db connection is established in the private constructor.
	private function __construct()
	{
		$this->conn = new PDO("mysql:host={$this->host};
		dbname={$this->name}", $this->user,$this->pass,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
	}
	  
	public static function getInstance()
	{
	    if(!self::$instance)
	    {
	    	self::$instance = new Conexion();
	    }
	    return self::$instance;
	}
	  
	public function getConnection()
	{
	    return $this->conn;
	}
}
?>
