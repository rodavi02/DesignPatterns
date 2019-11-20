<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require_once 'factory.php';
class Index {
	public function ejecutar() {
		echo "<strong>PROVOCAMOS UN ERROR A LA HORA DE CREAR LA PRENDA.</strong><BR>";
		$erronea1=Prenda::crear('dgdsgsdg', 'Hola', 'XL', 'Azul', 'Corta');
		echo $erronea1;
		echo "<hr>";

		echo "<strong>CREAMOS UNA CAMISETA</strong><BR>";
		$camiseta1=Prenda::crear('Camiseta', 'Cam1', 'M', 'Verde', 'Corta');
		echo $camiseta1;
		echo "<hr>";

		echo "<strong>CREAMOS UN PANTALÓN</strong><BR>";
		$pantalon1=Prenda::crear('Pantalon', 'Pan1', '40', 'Claro', 'Vaquero');
		echo $pantalon1;
		echo "<hr>";

		echo "<strong>CREAMOS CAMISETAS CON DISTINTO ESTILO</strong><BR>";
		$CamCorta=new MangaCorta('Cam2', 'S', 'Rojo');
		$CamLarga=new MangaLarga('Cam3', 'M', 'Verde');
		echo $CamCorta;
		echo $CamLarga;
		echo "<hr>";

		echo "<strong>CREAMOS PANTALONES CON DISTINTO ESTILO</strong><BR>";
		$PanCorto=new EstiloCorto('Pan2', '38', 'Azul');
		$PanLargo=new EstiloLargo('Pan3', '42', 'Amarillo');
		echo $PanCorto;
		echo $PanLargo;
		echo "<hr>";

		echo "<strong>CAMBIAMOS EL COLOR A UNA CAMISETA YA CREADA Y COMPROBAMOS QUE SE CAMBIA</strong><BR>";
		$CamCorta->setColor('Verde')."<br>";
		echo $CamCorta;
		echo "<hr>";

		echo "<strong>CREAMOS UN CLON</strong><BR>";
		$hola=new MangaCorta('Cam4', 'L', 'Turquesa');
		$hola2=clone $hola;
		echo $hola;
		$hola2->setNombre('Cam5');
		echo $hola2;
	}
}
$prueba=new Index();
$prueba->ejecutar();
?>
</body>
</html>