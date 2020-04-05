<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<table border='1'> <tr>";

echo "<tr>"; // fila uno

    for($cabecera= 1 ; $cabecera <=10; $cabecera++){
        echo "<td>tabla del $cabecera</td> ";
    }
echo "</tr>";

echo "<tr>"; // inicio fila 2

for ($i=1; $i<= 10; $i++){
    echo "<td>";
    for($x =1; $x<=10; $x++){
        echo "$i x $x = " . ($i*$x) . "<br/>"; 
    }
    echo "</td>";
    
    
}
echo "</tr>";


echo "</table>";
