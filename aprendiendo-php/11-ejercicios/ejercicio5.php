<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_GET['num1']) && isset($_GET['num2'])){
    
$num1= $_GET['num1'];
$num2= $_GET['num2'];

if ($num1<$num2){
for ($i=$num1; $i<=$num2; $i++){
    echo "$i";
    }
    
}else{
    echo "el numero 1 debe ser menor al numero dos";
    }
}else{
    echo " los numeros no existen";
    }
