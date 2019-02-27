<?php

  /*
  FUNCIONES:
  Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto
  y que pueden reutilizarse solamente invocando a la funcion tantas veces como
  queramos.
  */

  // Ejemplo 1
  function muestraNombre(){
    echo "Victor Robles <br/>";
    echo "Victor Robles <br/>";
    echo "Victor Robles <br/>";
    echo "Victor Robles <br/>";
  }

  // Invocar funcion
  muestraNombre();

  // Ejemplo 2
  function tabla($numero){
    echo $numero;
  }

  tabla(77);

?>
