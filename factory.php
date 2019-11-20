<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class Prenda {
	protected $nombre;
	protected $talla;
	protected $color;
	protected $estilo;

	public static function crear($tipo, $nombre, $talla, $color, $estilo) {
		switch ($tipo) {
			case 'Camiseta':
				return new Camiseta($nombre, $talla, $color, $estilo);
			case 'Pantalon':
				return new Pantalon($nombre, $talla, $color, $estilo);
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
		public function __construct($nombre, $talla, $color) {
			$this->nombre=$nombre;
			$this->talla=$talla;
			$this->color=$color;
		}

		public function __toString() {
			return $this->getTipo().": Nombre -> ".$this->getNombre().". Talla -> ".$this->getTalla().". Color -> ".$this->getColor().".<br>";
		}
	}

	class MangaCorta extends Camiseta {
		public function __construct($nombre, $talla, $color) {
			parent::__construct($nombre, $talla, $color);
			$this->estilo='Corta';
		}

		public function __toString() {
			return $this->getTipo().": Nombre -> ".$this->getNombre().". Talla -> ".$this->getTalla().". Color -> ".$this->getColor().". Manga -> ".$this->getEstilo().".<br>";
		}

		public function __clone() {
			$this->estilo='Corta';
		}
	}

	class MangaLarga extends Camiseta {
		public function __construct($nombre, $talla, $color) {
			parent::__construct($nombre, $talla, $color);
			$this->estilo='Larga';
		}

		public function __toString() {
			return $this->getTipo().": Nombre -> ".$this->getNombre().". Talla -> ".$this->getTalla().". Color -> ".$this->getColor().". Manga -> ".$this->getEstilo().".<br>";
		}

		public function __clone() {	
			$this->estilo='Larga';
		}
	}

	class Pantalon extends Prenda {
		public function __construct($nombre, $talla, $color) {
			$this->nombre=$nombre;
			$this->talla=$talla;
			$this->color=$color;
		}

		public function __toString() {
			return $this->getTipo().": Nombre -> ".$this->getNombre().". Talla -> ".$this->getTalla().". Color -> ".$this->getColor().".<br>";
		}
	}

	class EstiloCorto extends Pantalon {
		public function __construct($nombre, $talla, $color) {
			parent::__construct($nombre, $talla, $color);
			$this->estilo='Corto';
		}

		public function __toString() {
			return $this->getTipo().": Nombre -> ".$this->getNombre().". Talla -> ".$this->getTalla().". Color -> ".$this->getColor().". Estilo -> ".$this->getEstilo().".<br>";
		}

		public function __clone() {
			$this->estilo='Corto';
		}
	}

	class EstiloLargo extends Pantalon {
		public function __construct($nombre, $talla, $color) {
			parent::__construct($nombre, $talla, $color);
			$this->estilo='Largo';
		}

		public function __toString() {
			return $this->getTipo().": Nombre -> ".$this->getNombre().". Talla -> ".$this->getTalla().". Color -> ".$this->getColor().". Estilo -> ".$this->getEstilo().".<br>";
		}

		public function __clone() {
			$this->estilo='Largo';	
		}
	}
?>
</body>
</html>