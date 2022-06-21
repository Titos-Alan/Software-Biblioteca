<!DOCTYPE html>
<html lang="es">
<head>
  	<title>Biblioteca - login</title>
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
    <section class="vh-100 gradient-custom" 
        style="
        background-image:url(https://github.com/Titos-Alan/imgs/blob/main/bg.png?raw=true);
        height:100vh;
        width: 100%;
        background-position:center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        ">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card text-white" style="background-color: #252a32; border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase text-white">Inciar sesion</h2>
                <p class="text-white-50 mb-5">Ingrese su usuario y contraseña!</p>

                <form action="login/loguear.php" method="POST">

                <div class="form-outline form-white mb-4">
                    <input type="text" name="usuario" class="form-control form-control-lg" placeholder="Ingrese el usuario"/>
                    <label class="form-label" for="usuario" >Usuario</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="password" name="clave" class="form-control form-control-lg" placeholder="Ingrese la contraseña" />
                    <label class="form-label" for="clave">Contraseña</label>
                </div>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Ingresar</button>

                </form>

                </div>

            </div>
        </div>
        </div>
        </div>
    </div>
    </section>
</body>
</html>