<?php
var_dump($_GET);
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
$numero1 = $_GET['numero1'];
$numero2 =$_GET['numero2'];
echo "suma:" . ($numero1+$numero2) . "<br>";
echo "resta:" . ($numero1-$numero2) . "<br>";
echo "multiplicacion:" . ($numero1*$numero2) . "<br>";
echo "division:" . ($numero1/$numero2) . "<br>";

}else {
    echo "introduce correctamente los valores";
}