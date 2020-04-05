<?php
if(!is_dir('mi_carpeta')){
mkdir('mi_carpeta', 007) or die ('no se puede crear la carpeta');


}else {
    echo "ya esta creada";
}
//rmdir('mi_carpeta'); la borra
echo "<hr>";
if($gestor= opendir('./mi_carpeta')){
while(false !== ($archivo = readdir($gestor))){
    if($archivo != '.' && $archivo != '..'){
    echo $archivo . "</br>";
    }       
    }
}