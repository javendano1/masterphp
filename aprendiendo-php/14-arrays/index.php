<?php
$pelicula= 'batman';
$peliculas = array('batman','spiderman','el señor de los anillos');
$peliculas2=['superman','hombres de negro','terminator'];
var_dump($peliculas[1]);
var_dump($peliculas);
var_dump($peliculas2);

echo $peliculas[0];
echo $peliculas2[2];

echo " <h1> listado de peliculas </h1>";
echo "<ul>";

for ($i=0; $i<count($peliculas); $i++){
    echo "<li>".$peliculas[$i]. "</li>";
}
echo "</ul>";

foreach ($peliculas as $variable1){
    echo "<li>" . $variable1 . "</li>";
       
}
echo "</ul>";
echo "<hr/>";
$personas= array(          //array asociativo
    'nombre'=>'Victor',
    'apellido'=>'robles',
    'web'=>'victorroblesweb.es',
);
var_dump($personas);
var_dump($personas['apellido']);

$contactos= array(    // array multidimencionales
    array(//array asociativo
    'nombre'=>'Victor',
    'email'=>'robles@hotmail.cpm'
  ),
   array(           
    'nombre'=>'carlos',
    'email'=>'carlos@hotmail.cpm'
       ),
   array(         
    'nombre'=>'antonio',
    'email'=>'antonio@hotmail.cpm'
       ),
);
var_dump($contactos);
echo $contactos[2]['email'] ;

foreach($contactos as $key => $contacto){
    var_dump($contacto['nombre']);
}

echo count($peliculas);
echo sizeof($peliculas);