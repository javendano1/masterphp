<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$frase = "frase 1";

echo $frase;
function hola(){
    global $frase;
    echo "$frase";
    $year = 2019;
    return $year;
   
}
echo hola();


function buenosdias(){
    return "hola buenos dias";
}

function buenastardes(){
    return "hola buenas tardes";
}
function buenasnoches(){
    return "hola buenas noches";
}

$horario= "buenasNoches";
echo $horario();