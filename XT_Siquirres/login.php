<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ExtremeTech Siquirres | Inicio de Sesión</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/Iconos/XT Siquirres.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Raleway:400,700&display=swap"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

<?php
  require_once 'inclusiones.php';
  $clsUsu = new clsUsuarios($_POST);

  if(!$clsUsu->usuarioAnonimo()){  

    $salio = $clsUsu->cerrarSesion();
    $msj1 = '¡Sesión cerrada correctamente!';
  }

  if('POST' == $_SERVER['REQUEST_METHOD']) {

    if($clsUsu->iniciarSesion()) {
      header('Location: /index.php');
    } else {
      $msj1 = '¡Las credenciales ingresadas no corresponden a niguna cuenta existente!';
    }
  }

  if(!empty($_GET['delete']) && $_GET['delete'] == 'true'){
    $msj2 = '¡Se ha eliminado un perfil con éxito!';
  }

?>

</head>

<body>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand">XTREMETECH SIQUIRRES | INICIO DE SESIÓN</a>
        <div class="row text-md-right">

          <a class="btn btn-outline-light" href="/index.php" style="text-decoration: none; text-align: center; font-size: smaller;">
            <img src="img/Iconos/Inicio.png"><br>INICIO
          </a>&nbsp;&nbsp;|&nbsp;&nbsp;
          
      </div>
    </div>
  </nav><hr>

<?php if(isset($msj2)): ?><br>

  <div class="alert alert-danger" role="alert" style="text-align: center;">
    <h4 class="alert-heading">PERFIL ELIMINADO</h4>
    <p><?php echo $msj2; ?></p>
  </div><br>

<?php else: ?>
  <br><br><br><br><br><br>
<?php endif; ?>

  <div class="container" style="text-align: center;">    

    <h2 class="h2">CREDENCIALES</h2>
    <p><strong>** Ingrese las credenciales correspondientes a su cuenta de administrador asignada **</strong></p>

<?php if(!isset($salio) && !empty($msj1)): ?>
    <div class="alert alert-info" role="alert">
      <?php echo $msj1; ?>
    </div>
<?php elseif(isset($salio)): ?>
    <div class="alert alert-warning" role="alert">
      <?php echo $msj1; ?>
    </div>
<?php endif; ?><hr>        

    <div class="row align-items-stretch" style="justify-content:center">          
      <div class="col-md-6 aos-init aos-animate">
        <form action="login.php" method="POST" >

          <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ingrese aquí una cédula válida de 9 dígitos numéricos..." required autocomplete="off"><br>
          <input type="text" class="form-control" id="contraseña" name="contraseña" placeholder="Ingrese aquí la contraseña válida..." required autocomplete="off"><br>
          <input type="submit" value="Ingresar" class="btn btn-block btn-outline-info"><hr>                

        </form>
      </div>
    </div>
  </div>

  <footer class="footer mt-5 pt-5" role="contentinfo"><hr>
    <div class="container"><br><br>
      <div class="row">
        <div class="col-sm-6">
          <p class="mb-1">&copy; Copyright ExtremeTech Siquirres. All Rights Reserved</p>
          <div class="credits">

            Designed by <a>Alonso Calderón Q.</a>
          </div>
        </div>
        <div class="col-sm-6 social text-md-right">
          <a><span class="icofont-twitter"></span></a>
          <a><span class="icofont-facebook"></span></a>
          <a><span class="icofont-dribbble"></span></a>
          <a><span class="icofont-behance"></span></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery/jquery-migrate.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/easing/easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>
