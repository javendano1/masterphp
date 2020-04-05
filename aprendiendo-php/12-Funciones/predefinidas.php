<?php

$nombre="victor robles";
    var_dump($nombre);

echo "raiz cuadrada de 10: " .sqrt(10);

echo "redondear: " .round(7.891234, 2);


echo gettype($nombre); // valida el tipo 

if(isset($edad)){
    echo " la variable existe";
}else{
    echo "la variable no exixte";
}


$frase = "  mi contenido   ";
   var_dump(trim($frase));  // limpia espacios delate y atras de la frase
   
   $year = 2020;
   unset($year);
   var_dump($year);   // elimina la variable year 
   

   echo strtolower($frase); // minuscula
   echo strtoupper($frase); // mayuscula