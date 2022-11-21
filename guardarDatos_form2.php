<?php
  // Obtengo los datos cargados en el formulario de login.
  $alternativas = $_POST['alternativas'];
  $recomendaciones = $_POST['recomendaciones'];
  $talleres = $_POST['talleres'];
  $atencion = $_POST['atencion'];
  $compromisos_estudiante = $_POST['compromisos_estudiante'];
  $compromisos_profesor = $_POST['compromisos_profesor'];
   
  // Datos para conectar a la base de datos.
  include("BD_config.php");
  
  // Crear conexión con la base de datos.
  $conexion = mysqli_connect($server, $db_user, $db_pass, $database)or die("Problemas en la conexion");

  $query = mysqli_query($conexion,"INSERT INTO alumnosemestrecurso (alternativas, recomendaciones,talleres,atencion,compromisos_estudiante,compromisos_profesor) VALUES ('$alternativas','$recomendaciones','$talleres','$atencion','$compromisos_estudiante','$compromisos_profesor');");

    if(!$query){
        echo "<script> alert('Operación no exitosa');</script>";
    }else{
      echo "<script> alert('Datos Guardados');</script>";
      header("Location: formulario_3.html"); 
    }
  mysqli_close($conexion);
 
?>