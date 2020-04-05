<?php


function mostrararray($numeros){
    $resultado = "";
foreach ($numeros as $num){
  $resultado .= $num. "<br/>";
} 
return $resultado;
}


$numeros= array (1,2,8,4,5,4,7,9);
 
  echo "<h1>recorrer y mostrar</h1>";
  echo mostrararray($numeros);
    
echo "<ul>";

echo $numeros[2];

echo "<h1>ordenar y mostrar </h1>";

sort($numeros);
echo mostrarArray($numeros);

echo "<h1> numero total de elementos </h>";


echo count($numeros);

$busqueda = 55;
echo "<h1> buscar en el array el numero $busqueda </h>";

$search = array_search($busqueda, $numeros);

if(!empty($search)){
    echo " el numero buscado existe en el array en el indice $search ";
}else{
    echo "no existe el numero buscado ";
}