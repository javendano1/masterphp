<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//setcookie("nombre","valor que solo puede ser texto", caducidad, ruta, dominio);
setcookie("micookie", "valor de mi galleta");

setcookie("unyear", "valor de mi cookie de 365 dias", time()+(60*60*24*365));

?>
<a href="ver_cookies.php">ver las galletas </a>



