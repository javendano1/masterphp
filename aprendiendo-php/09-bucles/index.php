<?php

$numero=50;
while ($numero <=100){
    echo $numero;
    if($numero != 100){
        echo ",";
        
    }
    $numero++;
}

//

if(isset($_GET['numero'])){
    $numero = (int) $_GET['numero'];
}else{
    $numero = 1;
} 

echo "<h1> tabla de multiplicar del numero $numero</h1>";

$contador= 0;

while($contador <= 10){
    echo "$numero x $contador = " .($numero*$contador) . "<br>";
    $contador ++;
}
$edad=18;
$contador = 1;


do {
    echo "tienes acceso total $contador";
    $contador++;
    }while($edad >= 18 && $contador <= 10);