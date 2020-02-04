<html lang="es">

<head>
  <link rel="icon" type="image/png" href="../img/logo.png"/>
  <meta charset="utf-8">
  <title>RECON SHOP, USERS</title>
  <!-- CSS -->
  <link href="../css/boostrap.min.css" rel="stylesheet">

</head>
<body id="page-top">
  <!-- Barra de arriba, nombre y menus -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="../index.php">TIENDA</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../index.php">Inicio</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./registro.php">Registro</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Contenido del formulario-->
	<header class="masthead bg-primary text-white text-center">
		<h4 class="masthead-heading mb-4">Iniciar Sesion</h4>
		<h6 class="text-danger" >Inicie sesion para asi poder escoger su prenda</h6>
		<div class="container d-flex align-items-center flex-column">
			<form method="POST">
  				<div class="row">
    				<div class="col-lg-6">
    					<label> Nombre de Usuario </label>
      					<input type="text" name="usuario" class="form-control" placeholder="Usuario">
    				</div>
				    <div class="col-lg-6 mb-4">
				    	<label> Contraseña</label>
      					<input type="password" class="form-control" name="password" placeholder="Contraseña">
      					<button class="btn btn-muted" href=#><small class="form-text text-white">¿Has olvidado tu contraseña?</small></button>
    				</div>
    				<div class="col mb-4">
				    	<input type="submit" value="Iniciar" name="iniciar" class="btn btn-danger"></input>
    				</div>
			  </div>			  
			</form>
		</div>	
	</header>
  <?php
 
  ?>
<?php 
    include '../conexion.php';
    session_start();
    if (isset($_POST['iniciar'])) {      
      $usuario = $_POST['usuario'];
      $password = $_POST['password'];

      if (empty($usuario) || empty($password)) {
        echo "<b><center><p>Usuario o contraseña incorrecto</p></center></b>";
      }

      if ($usuario and $password) {
        $instance = Conexion::getInstance();
        $conn = $instance->getConnection();
        $compusuario =("SELECT count(nombre) from cliente where nombre='$usuario'");
        $resultusuario = $conn->prepare($compusuario);
        $resultusuario->execute();
       // $resultusuario = $conn->query($compusuario);
        $rowUsuario = $resultusuario->fetch();
        $numUsuario = $rowUsuario['count(nombre)'];
        if ($numUsuario==1) {
          $instance = Conexion::getInstance();
          $conn = $instance->getConnection();
          $sql = "SELECT nombre,password FROM cliente WHERE nombre='$usuario' AND password='$password'";
          $sentencia = $conn->prepare($sql);
          $result = $sentencia->execute();
            if (!empty($result)) {
              $_SESSION['usuario']=$_POST['usuario'];
              header("Location:../index.php");
            }       
        } else {
            echo "<p><center>Usuario o contraseña incorrecto</center></p>";
          }
      }
    }
  ?>



  <!-- Direccion, redes sociales y pie de pagina -->
 	<footer class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg col-sm-6">
          <h4 class="mb-2">Dirección</h4>
          <p>18015 Recon Shop Granada
            <br>Recogidas, GR</p>
        </div>
        <div class="col-lg d-none d-lg-block">
          <h4 class="mb-2">Búscanos en las redes sociales</h4>
          <a href="https://twitter.com/?lang=es"><img src="../img/twitter.png" width=32 height=32/></a>
          <a href="https://www.facebook.com"><img src="../img/facebook.png" width=32 height=32/></a>
          <a href="https://www.instagram.com"><img src="../img/instagram.png" width=32 height=32  /></a>          
        </div>
        <div class="col-lg col-sm-6">
         <h4 class="mb-2">Contactanos</h4>
          <p>Telefono de Contacto: 958313131</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Recon Shop 2019</small>
    </div>
  </section>

<!--Scripst para el documento -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../js/freelancer.min.js"></script>

</body>
</html>

