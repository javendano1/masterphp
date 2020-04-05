<?php

$coleccion = array();

for($i=0; $i<120; $i++){
    array_push($coleccion,"elemento-" . $i );
}
echo var_dump($coleccion);