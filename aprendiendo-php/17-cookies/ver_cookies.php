<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_COOKIE['micookie'])){
    echo $_COOKIE['micookie'];
}else{
    echo "no existe la cookie";
}

if(isset($_COOKIE['unyear'])){
       echo "<h1>" . $_COOKIE['unyear']."</h1>";
       }else{
           echo "no exixte la cookie ";
       }
       ?>
       <a href="borrar_cookies.php">borrar mis galletas </a>