<?php
session_start();
$usuario = $_SESSION['username'];

if (!isset($usuario)){
  header("location: index.php");
}else{

}
?>
<!doctype html>
<html lang="es">
  <head>
  	<title>Biblioteca - Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <!--Main css-->
    <link rel="stylesheet" href="../css/style.css">
    <!--other css-->
    <link rel="stylesheet" href="../css/other.css">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
		<div class="wrapper d-flex align-items-stretch">
    <!-- llama la sidebar  -->     
    <?php $cont = file_get_contents("./secciones/sidebar.php"); echo $cont;?>

        <!-- Contenido  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only"></span>
            </button>

            <?php
            $usuario = $_SESSION['username'];
            echo "<h5 style='margin: 0; padding: 0; color: black;'>Bienvenido $usuario!</h5>";
            ?>
          </div>
        </nav>
        <div class="main-content">
          <h4 class="mb-4">Sistema bibliotecario - Inicio</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>
      </div>
		</div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://kit.fontawesome.com/2dd0592ea0.js" crossorigin="anonymous"></script>
  </body>
</html>