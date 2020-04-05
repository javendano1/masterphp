<?php

$archivo = fopen("fichero_texto.txt", "a+");

//leer contenido


while(!feof($archivo)){
    $contenido = fgets($archivo);
echo $contenido . "<br>";
}

fwrite($archivo, "soy un texto metido desde php");

fclose($archivo);


//copy('fichero_texto.txt', 'fichero_copiado.text') or die("error al copiar");
//rename('fichero_copiado.text', 'archivito_recopiadito.txt');
//unlink('archivito_recopiadito.txt') or die ('error al borrar');

if(file_exists("fichero_texto.txt")){
    
    echo " el archivo existe";
}else{
echo "el archivo no existe";}