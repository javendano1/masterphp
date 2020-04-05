<?php

$tabla = array(
    "accion" => array("gta5", "call of dutty", "pugh"),
    "aventura" =>array ("assasing creed", "crash bandicoot", "prince of persia"),
    "deportes" =>array ("fifa19","pes 19", "moto g 19")
    );
$categorias = array_keys($tabla);
        
?>
<table border="1">
   <?php require_once 'ejercicio5/encabezados.php';?>
    <?php require_once 'ejercicio5/primera.php';?>
<?php require_once 'ejercicio5/segunda.php';?>
        <?php require_once 'ejercicio5/tercera.php';?>
    
  

    
    
</table>