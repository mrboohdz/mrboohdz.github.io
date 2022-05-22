<?php
/*  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  } */
  require 'bd.php';
  if(isset($_POST['btnInicio'])){
    $usuario = $_POST['user'];
    $pass = $_POST['password'];
    if(!empty($usuario) && !empty($pass)){
      $q = $conn->query("SELECT password FROM Login WHERE usuario = '$usuario'");
      $res = $q->fetch_assoc();
      if(mysqli_num_rows($q) != 0 && strcmp($pass, $res['password'])==0){
      /*  AQUI A DONDE VA UNA VEZ INICIADA SESION
      */
      }else{
        $message = 'Usuario o contraseña incorrectas.';
      }
    }else{
      $message = 'Campos Vacíos.';
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ingresar</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </head>
    <body class="bg-C">
        <?php require 'partials/header.php' ?>
        <?php if(!empty($message)): ?>
        <?php echo  "<script> alert('".$message."'); </script>" ?>
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class=" col-md-6 login">
                    <form action="index.php" method="post" class="form-group">
                        <h1>Iniciar Sesión</h1>
                        <label>Usuario</label>
                        <input type="text" name="user" id="user" placeholder="Ingresa tu Usuario" class="form-control"><br>
                        <label>Contraseña:</label>
                        <input type="password" name="password"  id="password" placeholder="Ingresa tu Contraseña" class="form-control"><br>
                        <input type="submit" name="btnInicio" class="btn btn-guardar btn-lg d-grid gap-2 col-5 mx-auto" value="Iniciar Sesión">
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

        <footer class="bg-A text-center fs-6 sticky-bottom font-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">Todos los derechos reservados.</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Consorcio Vengadores S. A. de C. V.</div>
                    <div class="col-md-4">Departamento de Recursos Humanos</div>
                    <div class="col-md-4">Tel: 222-123-1234</div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a href="#">Historial de acceso</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>

</html>
