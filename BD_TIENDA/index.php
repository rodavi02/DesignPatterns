<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="icon" type="image/png" href="img/logo.png"/>
  <meta charset="utf-8">
  <title>RECON SHOP GR</title>
  <!-- CSS -->
  <link href="css/boostrap.min.css" rel="stylesheet">
</head>

<body>
  <?php 
  session_start();
  if (isset($_SESSION['usuario'])) {
  include 'conexion.php';
  }
  ?>
  <!-- Barra de arriba, nombre y menus -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="./index.php">TIENDA</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold sbg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="./index.php">Inicio</a>
          </li>
          <?php 
              if (isset($_SESSION['usuario'])) {
                echo "<li class='nav-item mx-0 mx-lg-1'><a  class='nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger'>".$_SESSION['usuario']."</a></li>";
                echo "<li class='nav-item mx-0 mx-lg-1'><a class='nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger' href='paginas/cerrar.php'>CERRAR SESIÓN</a></li>";
              }else{
                echo "<li class='nav-item mx-0 mx-lg-1'><a href='paginas/inicio.php' class='nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger'>INICIAR SESIÓN</a></li>";
              }
          ?>         
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
      <!-- Zona del logo, imagen -->
      <img class="masthead-avatar mb-5" src="img/logo.png" alt="">
      <!-- Zona del logo, parte del medio -->
      <h1 class="masthead-heading text-uppercase mb-0">Recon Shop &reg;</h1>
      <!-- Zona del Logo, parte baja -->
      <p class="masthead-subheading font-weight-light mb-0">Diseño - Camisetas - Pantalones</p>
    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">
      <!-- Productos -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Productos</h2>

      <!-- Divisor entre nombre y productos -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Camisetas -->
        <div class="col-md-6 col-lg-6">
          <div class="portfolio-item mx-auto" data-toggle="modal">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <?php 
              if (isset($_SESSION['usuario'])) {
                echo "<a class='text text-white' href='./paginas/camisetas.php'>Camisetas</a>";
              } else {
                echo "<p>Debes iniciar sesion para continuar</p>";
                echo "<a class='text text-white' href='paginas/inicio.php'>Iniciar Sesion</a>";
              }
              ?>
              </div>
            </div>
            <img class="img-fluid" src="img/cam.png" alt="">
          </div>
        </div>
        

        <!-- Pantalones -->
        <div class="col-md-6 col-lg-6">
          <div class="portfolio-item mx-auto" data-toggle="modal portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <?php 
              if (isset($_SESSION['usuario'])) {
                echo "<a class='text-white' href='./paginas/pantalones.php'>Pantalones</a>";
              } else {
                echo "<p>Debes iniciar sesion para continuar</p>";
                echo "<a class='text text-white' href='paginas/inicio.php'>Iniciar Sesion</a>";
              }
              ?>
              </div>
            </div>
            <img class="img-fluid" src="img/pan.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

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
          <a href="https://twitter.com/?lang=es"><img src="img/twitter.png" width=32 height=32/></a>
          <a href="https://www.facebook.com"><img src="img/facebook.png" width=32 height=32/></a>
          <a href="https://www.instagram.com"><img src="img/instagram.png" width=32 height=32  /></a>          
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

  <!-- Links de Boostrap y JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Plugin JavaScript -->

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

</body>

</html>
