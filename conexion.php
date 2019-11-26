<?php
/*class Conexion {
  // creamos la instancia
	public static $instancia = null;
	public $conn;
	public $host = 'localhost';
	public $usuario = 'administrador';
	public $pass = 'administrador';
	public $dbname = 'tienda';
	
	public function __construct() {
    		$this->conn = new PDO("mysql:host={$this->host};
    		dbname={$this->dbname}", $this->usuario,$this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
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

	public function nuevoProducto() {
	    $instancia = Conexion::getInstancia();
	    $conn = $instancia->getConexion();
	    $talla = $_POST["talla"];
	    $color = $_POST["color"];
	    $manga = $_POST["manga"];
        $instancia = "INSERT INTO camiseta (talla,color,manga) VALUES ('$talla','$color','$manga')";
        $resultado = $conn->prepare($instancia);
        print_r($conn->errorInfo());
        $resultado->execute();
        $datos = $resultado->fetchAll();
	}
	public function nuevoProducto()
	{
		$instance = Conexion::getInstance();
        $conn = $instance->getConnection();
        $talla = $_POST["talla"];
		$color = $_POST["color"];
        $manga = $_POST["manga"];
        //$instance = "INSERT INTO camiseta (talla,color,manga) values ('$talla','$color','$manga')";
        $instance = "SELECT talla,color from camiseta";
        $result = $conn->prepare($instance);
        $result->execute();
        print_r($result);
        $datos = $result->fetchAll();
        foreach ($datos as $row) {
        	print $row['talla'].' '.$row['color'];
        }
	}
	public function nuevoProducto() {
	    $instance = Conexion::getInstance();
	    $conn = $instance->getConnection();
	    $talla = $_POST["talla"];
	    $color = $_POST["color"];
	    $manga = $_POST["manga"];
        $instance = "INSERT INTO camiseta (talla,color,manga) VALUES ('$talla','$color','$manga')";
        $resultado = $conn->prepare($instance);
        $resultado->execute();
        $datos = $resultado->fetchAll();
	}
}
//creamos 3 objetos para conectarmos a la base de datos, aunque solamente se conectara 1 vez debido a que usamos el patron de diseño singleton con PDO*/
class Conexion {
	// Hold the class instance.
	private static $instance = null;
	private $conn;
	private $host = 'localhost';
	private $user = 'administrador';
	private $pass = 'administrador';
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
	public function nuevoProducto() {
	    $instance = Conexion::getInstance();
	    $conn = $instance->getConnection();
	    $talla = $_POST["talla"];
	    $color = $_POST["color"];
	    $manga = $_POST["manga"];
        $instance = "INSERT INTO camiseta (talla,color,manga) VALUES ('$talla','$color','$manga')";
        $resultado = $conn->prepare($instance);
        $resultado->execute();
        $datos = $resultado->fetchAll();
	}
}
?>
