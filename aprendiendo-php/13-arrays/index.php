<?php

  /*
  ARRAYS
  Un array es una coleccion o un conjunto de datos/valores, bajo un unico nombre.
  Para acceder a esos valores podermos usar un indice numero o alfanumerico
  */

  $pelicula = "Batman";
  $peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
  $cantantes = ['2pac', 'Drake', 'Jeniffer Lopez'];
  $personas = array(
    'nombre' => 'Victor',
    'apellido' => 'Robles',
    'web' => 'victorroblesweb.es'
  );

  var_dump($personas['nombre'])  ;
  echo "<br>";
  var_dump($peliculas[2]);
  echo "<br>";
  var_dump($cantantes);

  // Recorrer con FOR
  echo "<h1>Listado de peliculas</h1>";

  echo "<ul>";
  for($i = 0; $i < count($peliculas); $i++){
    echo "<li>".$peliculas[$i]."</li>";
  }
  echo "</ul>";

  // Recorrer con Foreach
  echo "<h1>Listado de cantantes</h1>";
  echo "<ul>";
  foreach ($cantantes as $cantante) {
    echo "<li>".$cantante."</li>";
  }
  echo "</ul>";

  // Arrays multidimensionales

  $contactos  = array(
    array(
      'nombre' => 'Antonio',
      'email' => 'antonio@antonio.com'
    ),
    array(
      'nombre' => 'Luis',
      'email' => 'luis@luis.com'
    ),
    array(
      'nombre' => 'Salvador',
      'email' => 'salva@salva.com'
    )
  );

  foreach($contactos as $key => $contacto){
    var_dump($contacto);
  }


?>
