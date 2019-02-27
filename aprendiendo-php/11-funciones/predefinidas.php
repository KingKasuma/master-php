<?php

  $nombre = "Victor Robles";
  var_dump($nombre);

  //Fechas
  echo date('d-m-Y');
  echo "<br>";
  echo time();

  // Matematicas
  echo "<br>";
  echo "Raiz cuadrada de 10: ".sqrt(10);

  echo "<br>";
  echo "Numero aleatorio entr 10 y 40: ".rand(10,40);

  echo "<br>";
  echo "Numero pi: ".pi(10);

  echo "<br>";
  echo "Redondear: ".round(7.891234, 2);

  // Mas funciones generales
  echo "<br/>";
  echo gettype($nombre);


  // Detectar tipado
  echo "<br/>";
  if(is_string($nombre)){
    echo "Esa variable es un string";
  }

  echo "<br/>";
  if(is_float($nombre)){
    echo "La variable nombre no es un numero con decimales";
  }

  // Comprobar si existe una variable
  echo "<br/>";
  if(isset($edad)){
    echo "La variable existe";
  }else{
    echo "La variable no existe";
  }

  // Limpiar espacios
  echo "<br/>";
  $frase = "     mi contenido     ";
  var_dump(trim($frase));

  // Eliminar variables / index
  $year = 2020;
  unset($year);
  var_dump($year);

  // Comprobar variable vacia
  echo "<br/>";
  $texto = NULL;

  if(empty($texto)){
    echo "La variable texto esta vacia";
  }else{
    echo "La variable texto tiene contenido";
  }

  // Contar caracteres de un string
  echo "<br/>";
  $cadena = "12345";
  echo strlen($cadena);

  // Encontrar caracter
  echo "<br/>";
  $frase = "La vida es bella";
  echo strpos($frase, "vida");

  // Reemplazar palabras de un string
  echo "<br/>";
  $frase = str_replace("vida", "moto", $frase);
  echo $frase;

  // Mayusculas y minusculas
  echo "<br/>";
  echo strtolower($frase);
  echo "<br/>";
  echo strtoupper($frase);

?>
