<?php

  $cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'Alfredo'];
  $numeros = [1,2,5,8,3,4];

  //ordenar
  sort($numeros);
  asort($cantantes);
  echo "<br>";
  var_dump($cantantes);
  echo "<br>";
  var_dump($numeros);

  //Añadir elementos array
  $cantantes[] = "Natos";
  array_push($cantantes, "Waor");
  echo "<br>";
  // Eliminar elementos array
  array_pop($cantantes);
  unset($cantantes[2]);
  // Aleatorio
  $indice = array_rand($cantantes);
  echo $cantantes[$indice];
  echo "<br>";
  // Dar la vuelta
  var_dump(array_reverse($numeros));

  //Buscar dentro de un array
  $resultado = array_search('Alfredo',$cantantes);
  echo "<br>";
  var_dump($resultado);

  // Contar numero de elementos
  echo "<br>";
  echo sizeof($cantantes);

?>
