<?php

/*function muestraNombres(){
    echo "Victor robles<br/>";
    echo "Carlos Arturo<br/>";  
    echo "enrique buendia<br/>";
    echo "oscar rodrigues<br/>";
      
}

muestraNombres();

function tabla($numero){
    echo "<h3> tabla de multiplicar del numero: $numero </h3>";
    
    for ($i =1; $i <= 10 ; $i++){
        $operacion = $numero*$i;
        echo "$numero x $i =  $operacion <br/>";
    }
}
 /*   
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
    tabla(2);
    tabla(9);
    }else {
        echo "no hay numeros para sacar la tabla";
        
    }*/
/*for ($i=1; $i<=10; $i++){
    tabla($i);
    
}
*/
function calculadora($numero1, $numero2 , $negrita=false){
    
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    if($negrita!== true){
        echo "<h1>";
    }
    echo "<hr/>";
    
    echo "suma: " . $suma;
    echo "<br/> resta: " . $resta;
    echo "<br/> multiplicacion: " . $multiplicacion;
    echo "<br/> division " . $division;
    echo "<hr/>";
}

calculadora(10,30,true);
calculadora(20,10);


function getNombre($nombre){
    $texto = "el nombre es:" . $nombre;
    return $texto;
    
    
}


function devuelvenombre($nombre, $apellidos){
    $texto =getNombre($nombre)
      . "<br/>" .
       "Los apellidos son: $apellidos";
    return $texto;
}
 echo devuelvenombre("victor", "robles");