<?php
  require 'bd.php';
  $message = '';
  if (!empty($_POST['user']) && !empty($_POST['password'])) {
    if($_POST['password'] == $_POST['password1']){
      $sql = "INSERT INTO Login (usuario,password) VALUES ( '{$_POST['user']}' , '{$_POST['password']}' )";
      $stmt = $conn->prepare($sql);
    //  $stmt->bindParam(":user", $_POST['user']);
    //  $stmt->bindParam(":password", $_POST['password']);

      if ($stmt->execute()) {
        $message = 'Usuario creado correctamente.';
      } else {
        $message = 'Ocurrió un error al crear el usuario. Intente nuevamente.';
      }
    }else{
      $message = 'Las contraseñas no son iguales.';
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registro</title>
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
                    <form action="registro.php" method="post" class="form-group">
                        <h1>Registro</h1>
                        <label>Ingrese un nombre de usuario:</label>
                        <input type="text" name="user" id="user" placeholder="Ingresa tu Usuario" class="form-control"><br>
                        <label>Ingrese una Contraseña:</label>
                        <input type="password" name="password"  id="password" placeholder="Ingresa tu Contraseña" class="form-control"><br>
                        <label>Repita la Contraseña:</label>
                        <input type="password" name="password1"  id="password" placeholder="Repite tu Contraseña" class="form-control"><br>
                        <input type="submit" class="btn btn-guardar btn-lg d-grid gap-2 col-5 mx-auto" value="Registrarse">
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
