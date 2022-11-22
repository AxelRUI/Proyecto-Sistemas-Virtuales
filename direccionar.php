<?php
  session_start();
   
  // Obtengo los datos cargados en el formulario de login.
  $usuario = $_POST['usuario'];
  $password = $_POST['pass'];
   
  // Datos para conectar a la base de datos.
  include("BD_config.php");
  
  
  // Crear conexión con la base de datos.
  try {
    $conexion = mysqli_connect($server, $db_user, $db_pass, $database)or die("Problema en la conexion");
  } catch (\Throwable $th) {
    throw $th;
  }


  $queryusuario = mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario ='$usuario' and password = '$password'");
  $nr = mysqli_num_rows($queryusuario);
  // Verificando si el usuario existe en la base de datos.
  if($nr==1){
    // Guardo en la sesión el email del usuario.
    $_SESSION['usuario'] = $usuario;

    // Redirecciono al usuario a la página DE formulario.html
    header("Location: filtros.html"); 

    }else{
      echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'login.html' </script>";
    }
  mysqli_close($conexion);
 
?>