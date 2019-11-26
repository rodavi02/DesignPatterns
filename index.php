<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require_once 'factory.php';
require_once 'conexion.php';
class Index {
	public function ejecutar() {
		echo "<strong>PROVOCAMOS UN ERROR A LA HORA DE CREAR LA PRENDA.</strong><BR>";
		$erronea1=Prenda::crear('dgdsgsdg', 'Hola', 'XL', 'Azul', 'Corta');
		echo $erronea1;
		echo "<hr>";

		echo "<strong>CREAMOS UNA CAMISETA</strong><BR>";
		$camiseta1=Prenda::crear('Camiseta', 'M', 'Verde', 'Corta');
		echo $camiseta1;
		echo "<hr>";

		echo "<strong>CREAMOS UN PANTALÓN</strong><BR>";
		$pantalon1=Prenda::crear('Pantalon', '40', 'Claro', 'Vaquero');
		echo $pantalon1;
		echo "<hr>";

		echo "<strong>CREAMOS CAMISETAS CON DISTINTO ESTILO</strong><BR>";
		$CamCorta=new MangaCorta('S', 'Rojo');
		$CamLarga=new MangaLarga('M', 'Verde');
		echo $CamCorta;
		echo $CamLarga;
		echo "<hr>";

		echo "<strong>CREAMOS PANTALONES CON DISTINTO ESTILO</strong><BR>";
		$PanCorto=new EstiloCorto('38', 'Azul');
		$PanLargo=new EstiloLargo('42', 'Amarillo');
		echo $PanCorto;
		echo $PanLargo;
		echo "<hr>";

		echo "<strong>CAMBIAMOS EL COLOR A UNA CAMISETA YA CREADA Y COMPROBAMOS QUE SE CAMBIA</strong><BR>";
		$CamCorta->setColor('Verde')."<br>";
		echo $CamCorta;
		echo "<hr>";

		echo "<strong>CREAMOS UN CLON</strong><BR>";
		$hola=new MangaCorta('L', 'Turquesa');
		$hola2=clone $hola;
		echo $hola;
		echo $hola2;
		echo "<hr>";
	}
}
$prueba=new Index();
$prueba->ejecutar();
?>
</body>
</html>