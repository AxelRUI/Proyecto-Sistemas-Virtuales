<?php
  session_start();
   
  // Obtengo los datos cargados en el formulario de login.

  $materia1 = 0.0;
  $materia2 = 0.0;
  $materia3 = 0.0;
  $materia4 = 0.0;
  $materia5 = 0.0;
  $materia6 = 0.0;
  $materia7 = 0.0;
  $suma = 0.0;
  $promedio = 0.0;
  $no_materias =0;

  $nombre = $_POST['nombre'];
  $matricula = $_POST['matricula'];
  $carrera = $_POST['carrera'];
  $semestre = $_POST['semestre'];
  $ciclo = $_POST['ciclo'];
  $no_materias = $_POST['no_materias'];

  $materia1 = $_POST['materia1'];
  $materia2 = $_POST['materia2'];
  $materia3 = $_POST['materia3'];
  $materia4 = $_POST['materia4'];
  $materia5 = $_POST['materia5'];
  $materia6 = $_POST['materia6'];
  $materia7 = $_POST['materia7'];

  $materia1_cal = $_POST['materia1_cal'];
  $materia2_cal = $_POST['materia2_cal'];
  $materia3_cal = $_POST['materia3_cal'];
  $materia4_cal = $_POST['materia4_cal'];
  $materia5_cal = $_POST['materia5_cal'];
  $materia6_cal = $_POST['materia6_cal'];
  $materia7_cal = $_POST['materia7_cal'];

  $materia1_dif = $_POST['materia1_dif'];
  $materia2_dif = $_POST['materia2_dif'];
  $materia3_dif = $_POST['materia3_dif'];
  $materia4_dif = $_POST['materia4_dif'];
  $materia5_dif = $_POST['materia5_dif'];
  $materia6_dif = $_POST['materia6_dif'];
  $materia7_dif = $_POST['materia7_dif'];

  $materia1_pref = $_POST['materia1_pref'];
  $materia2_pref = $_POST['materia2_pref'];
  $materia3_pref = $_POST['materia3_pref'];
  $materia4_pref = $_POST['materia4_pref'];
  $materia5_pref = $_POST['materia5_pref'];
  $materia6_pref = $_POST['materia6_pref'];
  $materia7_pref = $_POST['materia7_pref'];

  $materia1_tiempo = $_POST['materia1_tiempo'];
  $materia2_tiempo = $_POST['materia2_tiempo'];
  $materia3_tiempo = $_POST['materia3_tiempo'];
  $materia4_tiempo = $_POST['materia4_tiempo'];
  $materia5_tiempo = $_POST['materia5_tiempo'];
  $materia6_tiempo = $_POST['materia6_tiempo'];
  $materia7_tiempo = $_POST['materia7_tiempo'];

  $esfuerzo = $_POST['esfuerzo'];
  $esfuerzo_xq = $_POST['esfuerzo_xq'];
  $rendimiento = $_POST['rendimiento'];
  $situación_identificada = $_POST['situación_identificada'];


  $suma= $materia7_cal+$materia6_cal+$materia5_cal+$materia4_cal+$materia3_cal+$materia2_cal+$materia1_cal;
  $promedio = $suma/$no_materias;

  if($promedio<=7){
    $status="IRREGULAR";
  }else{
     $status="REGULAR";
  }

   
  // Datos para conectar a la base de datos.
  include("BD_config.php");
  
  
  // Crear conexión con la base de datos.
  $conexion = mysqli_connect($server, $db_user, $db_pass, $database)or die("Problemas en la conexion");

  $query = mysqli_query($conexion,"INSERT INTO alumnosemestrepasado (matricula_alumno,nombre,carrera,semestre,ciclo,no_materias,materia1,materia2,materia3,materia4,materia5,materia6,materia7,materia1_cal,materia2_cal,materia3_cal,materia4_cal,materia5_cal,materia6_cal,materia7_cal,materia1_dif,materia2_dif,materia3_dif,materia4_dif,materia5_dif,materia6_dif,materia7_dif,materia1_pref,materia2_pref,materia3_pref,materia4_pref,materia5_pref,materia6_pref,materia7_pref,materia1_tiempo,materia2_tiempo,materia3_tiempo,materia4_tiempo,materia5_tiempo,materia6_tiempo,materia7_tiempo,esfuerzo,esfuerzo_xq,rendimiento,situación_identificada,promedio,status) VALUES ('$matricula','$nombre','$carrera','$semestre','$ciclo','$no_materias','$materia1','$materia2','$materia3','$materia4','$materia5','$materia6','$materia7','$materia1_cal','$materia2_cal','$materia3_cal','$materia4_cal','$materia5_cal','$materia6_cal','$materia7_cal','$materia1_dif','$materia2_dif','$materia3_dif','$materia4_dif','$materia5_dif','$materia6_dif','$materia7_dif','$materia1_pref','$materia2_pref','$materia3_pref','$materia4_pref','$materia5_pref','$materia6_pref','$materia7_pref','$materia1_tiempo','$materia2_tiempo','$materia3_tiempo','$materia4_tiempo','$materia5_tiempo','$materia6_tiempo','$materia7_tiempo','$esfuerzo','$esfuerzo_xq','$rendimiento','$situación_identificada','$promedio','$status');");

    if(!$query){
        echo "<script> alert('Operación no exitosa');</script>";
    }else{
      echo "<script> alert('Datos Guardados');</script>";
      header("Location: formulario_2.html"); 
    }
  mysqli_close($conexion);
 
?>