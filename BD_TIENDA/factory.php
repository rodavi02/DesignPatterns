<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include 'conexion.php';
class Prenda {
	static public $ultimoNombre = 0;
	protected $nombre;
	protected $talla;
	protected $color;
	protected $estilo;

	public static function crear($tipo, $talla, $color, $estilo) {
		switch ($tipo) {
			case 'Camiseta':
				return new Camiseta($talla, $color, $estilo);
			case 'Pantalon':
				return new Pantalon($talla, $color, $estilo);
			default:
				return ('No se ha encontrado la prenda. Debe introducir \'Camiseta\' o \'Pantalon\'<br>');
		}
	}

	public function getTipo() {
		return get_class($this);
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function getTalla() {
		return $this->talla;
	}

	public function getColor() {
		return $this->color;
	}

	public function getEstilo() {
		return $this->estilo;
	}

	public function setNombre($nombre) {
		return $this->nombre=$nombre;
	}

	public function setTalla($talla) {
		return $this->talla=$talla;
	}

	public function setColor($color) {
		return $this->color=$color;
	}

	public function setEstilo($estilo) {
		return $this->estilo=$estilo;
	}
}

	class Camiseta extends Prenda {
		public function __construct($talla, $color) {
			self::$ultimoNombre += 1;
			$this->nombre=self::$ultimoNombre;
			$this->talla=$talla;
			$this->color=$color;
		}

		public function __toString() {
			return $this->getTipo().": Nombre -> ".$this->getNombre().". Talla -> ".$this->getTalla().". Color -> ".$this->getColor().".<br>";
		}
		public function nuevoProductoCamiseta() {
		    $instance = Conexion::getInstance();
		    $conn = $instance->getConnection();
		    $talla = $_POST["talla"];
		    $color = $_POST["color"];
		    $manga = $_POST["manga"];
		    $cantidad = $_POST["cantidad"];
	        $instance = "INSERT INTO camiseta (talla,color,manga,cantidad) VALUES ('$talla','$color','$manga','$cantidad')";
	        $resultado = $conn->prepare($instance);
	        $resultado->execute();
	        $datos = $resultado->fetchAll();
		}
	}

	class MangaCorta extends Camiseta {
		public function __construct($talla, $color) {
			parent::__construct($talla, $color);
			$this->estilo='Corta';
		}

		public function __toString() {
			return "<center> Número -> ".$this->getNombre().". Talla -> ".$this->getTalla().". Color -> ".$this->getColor().". Manga -> ".$this->getEstilo().".</center><br>";
		}

		public function __clone() {
			$this->nombre += 1;
			$this->estilo='Corta';
		}

		public function clonMangaCorta() {
			if (isset($_POST["cantidad"])) {
				$i=0;
				echo "<p><b><center>Se han creado estos clones:</center></b></p><br>";
				while ($i < $_POST["cantidad"]) {
					$clon=new MangaCorta($_POST["talla"], $_POST["color"]);
					echo $clon;
					$i++;
				}
			}
		}
	}

	class MangaLarga extends Camiseta {
		public function __construct($talla, $color) {
			parent::__construct($talla, $color);
			$this->estilo='Larga';
		}

		public function __toString() {
			return "<center> Número -> ".$this->getNombre().". Talla -> ".$this->getTalla().". Color -> ".$this->getColor().". Manga -> ".$this->getEstilo()."</center><br>";
		}

		public function __clone() {
			$this->nombre += 1;
			$this->estilo='Larga';
		}

		public function clonMangaLarga() {
			if (isset($_POST["cantidad"])) {
				$i=0;
				echo "<p><b><center>Se han creado estos clones:</center></b></p><br>";
				while ($i < $_POST["cantidad"]) {
					$clon=new MangaLarga($_POST["talla"], $_POST["color"]);
					echo $clon;
					$i++;
				}
			}
		}
	}

	class Pantalon extends Prenda {
		public function __construct($talla, $color) {
			self::$ultimoNombre += 1;
			$this->nombre=self::$ultimoNombre;
			$this->talla=$talla;
			$this->color=$color;
		}

		public function __toString() {
			return $this->getTipo().": Nombre -> ".$this->getNombre().". Talla -> ".$this->getTalla().". Color -> ".$this->getColor().".<br>";
		}
		public function nuevoProductoPantalon() {
		    $instance = Conexion::getInstance();
        $conn = $instance->getConnection();
        $talla = $_POST["talla"];
        $color = $_POST["color"];
        $estilo = $_POST["estilo"];
        $cantidad = $_POST["cantidad"];
          $instance = "INSERT INTO pantalon (talla,color,estilo,cantidad) VALUES ('$talla','$color','$estilo','$cantidad')";
          $resultado = $conn->prepare($instance);
          $resultado->execute();
          $datos = $resultado->fetchAll();
		}
	}

	class EstiloCorto extends Pantalon {
		public function __construct($talla, $color) {
			parent::__construct($talla, $color);
			$this->estilo='Corto';
		}

		public function __toString() {
			return "<center> Número -> ".$this->getNombre().". Talla -> ".$this->getTalla().". Color -> ".$this->getColor().". Estilo -> ".$this->getEstilo()."</center><br>";
		}

		public function __clone() {
			$this->nombre += 1;
			$this->estilo='Corto';
		}

		public function clonEstiloCorto() {
			if (isset($_POST["estilo"])) {
				$i=0;
				echo "<p><b><center>Se han creado estos clones:</center></b></p><br>";
				while ($i < $_POST["cantidad"]) {
					$clon=new EstiloCorto($_POST["talla"], $_POST["color"]);
					echo $clon;
					$i++;
				}
			}
		}
	}

	class EstiloLargo extends Pantalon {
		public function __construct($talla, $color) {
			parent::__construct($talla, $color);
			$this->estilo='Largo';
		}

		public function __toString() {
			return "<center> Número -> ".$this->getNombre().". Talla -> ".$this->getTalla().". Color -> ".$this->getColor().". Estilo -> ".$this->getEstilo()."</center><br>";
		}

		public function __clone() {
			$this->nombre += 1;
			$this->estilo='Largo';	
		}

		public function clonEstiloLargo() {
			if (isset($_POST["estilo"])) {
				$i=0;
				echo "<p><b><center>Se han creado estos clones:</center></b></p><br>";
				while ($i < $_POST["cantidad"]) {
					$clon=new EstiloLargo($_POST["talla"], $_POST["color"]);
					echo $clon;
					$i++;
				}
			}
		}
	}
?>
</body>
</html>