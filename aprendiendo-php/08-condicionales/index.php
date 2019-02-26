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
      echo "No es Europeo";
    }

  }else{
    echo "<h2>$nombre no es mayor de edad</h2>";
  }

?>
