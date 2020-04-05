<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$matriz = array ("hola mundo", 88);
$titulo = "Master en PHP";
$numero = 77;
$verdadero = true;

if(is_array($matriz)){
    echo "el array es un array";
   }
   
   if(is_string($titulo)){
       echo "el contenido es $titulo";
   }
   if(is_integer($numero)){
       echo "$numero";
   }
   if(is_bool($verdadero)){
       echo "el booleano es verdadero";
   }