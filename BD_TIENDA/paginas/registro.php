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
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./inicio.php">Atrás</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- REGISTRO DE USUARIOS -->
  <header class="masthead bg-primary text-white text-center">
    <h4 class="masthead-heading mb-4">Registro de Usuarios</h4>
    <h6 class="text-danger" >Ingrese sus datos a continuación:</h6>
    <div class="container d-flex align-items-center flex-column">
      <form method="POST" enctype="multipart/form-data" action="registro.php">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Nombre de Usuario</label>
            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
          </div>
          <div class="form-group col-md-6">
            <label>Apellido</label>
            <input type="text" class="form-control" name="apellido" placeholder="Apellido">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Contraseña</label>
            <input type="password" class="form-control" name="password" placeholder="Contraseña">
          </div>
          <div class="form-group col-md-6">
            <label>Contraseña</label>
            <input type="password" class="form-control" name="password2" placeholder="Repita Contraseña">
          </div>
        </div>
        <div class="form-group">
          <label>DNI</label>
          <input type="text" name="dni" class="form-control" placeholder="DNI" >
        </div>
        <div class="form-group">
          <label for="inputAddress2">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Correo Electronico">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Ciudad</label>
            <input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
          </div>
          <div class="form-group col-md-2">
            <label>CP</label>
            <input type="text" name="cp" class="form-control" >
          </div>
          <div class="form-group col-md-4" >
            <label>Provincia</label>
            <input type="text" name="provincia" class="form-control" placeholder="Provincia" ="">
          </div>
        </div>
        <button type="submit" name="registrar" class="btn btn-danger">Registrarse</button>
      </form>
    </div>  
  </header>

  <!-- ZONA PHP -->
  <?php
      include '../conexion.php';
      if (isset($_POST['registrar'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $dni = $_POST['dni'];
        $email = $_POST['email'];
        $ciudad = $_POST['ciudad'];
        $cp = $_POST['cp'];
        $provincia = $_POST['provincia'];

        // CONTROL DE ERRORES
        // NOMBRE
              

        // PASSWORD y PASSWORD2
        if (empty($password)) {
          echo "<center><p> Introduzca una Contraseña</p></center>";
        }

        if (empty($password2)){
          echo "<center><p> Escriba de nuevo su Contraseña</p></center>";
        }

        // APELLIDO
        if (empty($apellido)) {
          echo "<center><p>Introduzca un apellido</p></center>";
        }else {
            if (!preg_match('/^[A-ZÁÉÍÓÚ][a-záéíóú]*$/', $_POST['apellido'])) {
              echo "<center><p>El/Los apellidos solo pueden tener letras</p></center>";
            }
        }

        // DNI
        if (empty($dni)) {
          echo "<center><p> Introduzca un DNI</p></center>";
        }else {
          if (!preg_match('/[0-9]{7,8}[A-Z]/', $_POST['dni'])) {
                    echo "<center><p>Introduzca un DNI valido</p></center>";
          }
        }

        // EMAIL
        if (empty($email)) {
          echo "<center><p>Introduzca un email</p></center>";
        }else {
          if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $_POST['email'])) {
            echo "<center><p> Escriba un correo valido</p></center>";
          }
        }

        // CIUDAD
        if(empty($ciudad)) {
          echo "<center><p>Introduzca una ciudad</p></center>";
        }else {
          if (!preg_match('/^[A-ZÁÉÍÓÚ][a-záéíóú]*$/', $_POST['ciudad'])) {
            echo "<center><p> Introduzca una ciudad valida</p></center>";
          }
        }

        // CP<center>
        if (empty($cp)) {
          echo "<center><p> Introduzca un codigo postal</p></center>";
        }else {
          if (!preg_match('/[0-5]/', $_POST['cp'])) {
                    echo "<center><p>Introduzca un C.P valido</p></center>";
          }
        }

        // PROVINCIA
        if(empty($provincia)) {
                echo "<center><p>Introduzca una provincia</p></center>";
            }else {
                if (!preg_match('/^[A-ZÁÉÍÓÚ][a-záéíóú]*$/', $_POST['provincia'])) {
                    echo "<center><p> Introduzca una propiedad valida</p></center>";
                }
            }

        // INSERCION DE DATOS
        if ($nombre and $apellido and $password and $password2 and $dni and $email and $ciudad and $cp and $provincia) {
          
          if($password != $password2) {
            echo "<b><center><p> Las contraseñas no coinciden</p></center></b>";
          } else {
          	$instance = Conexion::getInstance();
      		$conn = $instance->getConnection();
            $registro="INSERT INTO cliente (nombre,apellido,password,dni,correo,ciudad,cp,provincia) VALUES ('$nombre','$apellido','$password','$dni','$email','$ciudad','$cp','$provincia')";
            $nuevo = $conn->prepare($registro);
            $nuevo->execute();
            echo "<p><center> ¡Te has registrado en Recon Shop! </center></p>";
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