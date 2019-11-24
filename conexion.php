<?php
class Conexion {
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
        $resultado->execute();
        $datos = $resultado->fetchAll();
	}
}
//creamos 3 objetos para conectarmos a la base de datos, aunque solamente se conectara 1 vez debido a que usamos el patron de diseño singleton con PDO
?>
