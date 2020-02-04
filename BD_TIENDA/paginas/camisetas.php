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
      <a class="navbar-brand js-scroll-trigger" href="#page-top">TIENDA</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../index.php">Inicio</a>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- FORMULARIO SELECT -->
   <header class="masthead bg-primary text-white text-center">
    <h4 class="masthead-heading mb-4">Diseño de camisetas</h4>
    <div class="container d-flex align-items-center flex-column">
      <form method="POST" enctype="multipart/form-data" action="camisetas.php">
        <div class="form-row">
          <div class="form-group col-md-auto">
            <label>Manga</label>
            <select class="form-control" name="manga"> 
              <option value="larga">Larga</option>
              <option value="corta">Corta</option>
            </select>
          </div>
          <div class="form-group col-md-auto">
            <label>Color</label>
            <select class="form-control" name="color"> 
              <option value="verde">Verde</option>
              <option value="azul">Azul</option>
              <option value="amarillo">Amarillo</option>
              <option value="rojo">Rojo</option>
              <option value="morado">Morado</option> 
            </select>
          </div>
          <div class="form-group col-md-auto">
            <label>Talla</label>
            <select class="form-control" name="talla"> 
              <option value="xs">XS</option>
              <option value="s">S</option>
              <option value="m">M</option>
              <option value="l">L</option>
              <option value="xl">XL</option>
            </select>
          </div>
          <div class="form-group col-md-auto">
            <label>Cantidad</label>
            <select class="form-control" name="cantidad"> 
              <option value="5">5</option>
              <option value="10">10</option>
              <option value="15">15</option>
              <option value="20">20</option>
              <option value="50">50</option> 
            </select>
          </div>
        </div>
        <div>
          <button name="crear" class="btn btn-light">Diseñar</button>
        </div>
      </form>
    </div>  
  </header>
  <?php
  include '../factory.php';
  if (isset($_POST["crear"])) {
    Camiseta::nuevoProductoCamiseta();
  }
  if (isset($_POST["crear"])) {
      if ($_POST["manga"]=="corta") {
      MangaCorta::clonMangaCorta();
    } elseif ($_POST["manga"]=="larga") {
          MangaLarga::clonMangaLarga();
      } else {
          echo "<p><center> Error </center></p>";
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
