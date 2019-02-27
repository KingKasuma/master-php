<?php

  $color = "rojo";

  if($color == "rojo"){
    echo "El color es rojo";
  }else{
    echo "El color no es rojo";
  }
  echo "<br>";

  $year = 2019;
  if($year == 2019){
    echo "Estamos en 2019";
  }else{
    echo "No estamos en el 2019";
  }

  // Ejemplo 3
  $nombre = "David Extremadura";
  $ciudad = "Madrid";
  $continente = "Asia";
  $edad = 42;
  $mayoria_edad = 18;

  if($edad >= $mayoria_edad){
    echo "<h1>$nombre es mayor de edad</h1>";

    if($continente == "Europa"){
      echo "<h2>Y es de $ciudad</h2>";
    }else{
      echo "No es Europeo\n";
    }

  }else{
    echo "<h2>$nombre no es mayor de edad</h2>";
  }

  $dia = 2;

  if($dia == 1){
    echo "LUNES";
  }elseif ($dia == 2) {
    echo "MARTES";
  }elseif ($dia == 3) {
    echo "MIERCOLES";
  }elseif ($dia == 4) {
    echo "JUEVES";
  }

  // switch
  $dia = 4;

  switch ($dia) {
    case 1:
      echo "LUNES";
      break;
    case 2:
      echo "MARTES";
      break;
    case 3:
      echo "MIERCOLES";
      break;
    case 3:
      echo "JUEVES";
      break;
    case 4:
      echo "VIERNES";
      break;
    default:
      echo "ES FIN DE SEMANA";
      break;
  }

  // GOTO
  goto marca;
  echo "<h3>Instruccion 1</h3>";
  echo "<h3>Instruccion 2</h3>";
  echo "<h3>Instruccion 3</h3>";
  echo "<h3>Instruccion 4</h3>";

  marca:
  echo "<h1>Me he saltado 4 echos</h1>";

?>
