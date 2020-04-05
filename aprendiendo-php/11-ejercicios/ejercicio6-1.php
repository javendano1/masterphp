<?php


echo "<table border='1'> <tr>";



    for ($i=1; $i<=10; $i++){
    echo "<td> tabla del $i </td>";
    }
echo "</tr>";
echo "<tr>";

    for ($x=1;$x<=10;$x++){
        echo "<td>";
        for($y=1;$y<=10;$y++){
            echo "$x x $y = " . ($x*$y) . "</br>";
        }
            echo"</td>";
    }
     echo "</tr";
     
     echo "</td>";
      