<?php
  // Obtengo los datos cargados en el formulario de login.
  $expectativas = $_POST['expectativas'];
  $expectativas_semestres  = $_POST['expectativas_semestres'];
  $expectativas_semestres_xq = $_POST['expectativas_semestres_xq'];
  $hayObstaculos = $_POST['hayObstaculos'];
  $obstaculo1 = $_POST['obstaculo1'];
  $obstaculo2 = $_POST['obstaculo2'];
  $obstaculo3 = $_POST['obstaculo3'];
  $meta_corto = $_POST['meta_corto'];
  $meta_mediano = $_POST['meta_mediano'];
  $meta_largo = $_POST['meta_largo'];
   
  // Datos para conectar a la base de datos.
  include("BD_config.php");
  
  // Crear conexión con la base de datos.
  $conexion = mysqli_connect($server, $db_user, $db_pass, $database)or die("Problemas en la conexion");

  $query = mysqli_query($conexion,"INSERT INTO metasalumno (expectativas,expectativas_semestres,expectativas_semestres_xq,hayObstaculos,obstaculo1,obstaculo2,obstaculo3,meta_corto,meta_mediano,meta_largo) VALUES ('$expectativas','$expectativas_semestres','$expectativas_semestres_xq','$hayObstaculos','$obstaculo1','$obstaculo2','$obstaculo3','$meta_corto','$meta_mediano','$meta_largo');");

    if(!$query){
        echo "<script> alert('Operación no exitosa');</script>";
    }else{
      echo "<script> alert('Datos Guardados');</script>";
      header("Location: filtros.html"); 
    }
  mysqli_close($conexion);
 
?>