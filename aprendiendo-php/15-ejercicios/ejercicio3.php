<?php

$texto = "";

if(empty($texto)){
    $texto  = " hola yo soy el relleno de la variable texto";
    $textoMAYUS = strtoupper($texto);
    
    echo "$textoMAYUS";
    echo "<strong>$textoMAYUS</strong>";
}else {
    echo " la valriable tiene este contenido dentro: " .$texto;
}