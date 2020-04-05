<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>validacion de formularios php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>validar formularios en PHP </h1>
        
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                
                if($error == 'faltan_valores'){
                    echo '<strong style="color:red"> Introduce todos los datos en todos los campos del formulario </strong>'; 
                }
                 if($error == 'nombre'){
                    echo '<strong style="color:red"> introduce bien el nombre </strong>'; 
                }
                 if($error == 'apellido'){
                    echo '<strong style="color:red"> apellido incorrecto </strong>'; 
                }
                 if($error == 'email'){
                    echo '<strong style="color:red"> Introduce email correcto</strong>'; 
                }
                 if($error == 'edad'){
                    echo '<strong style="color:red"> introduce edad valida </strong>'; 
                }
                  if($error == 'pass'){
                    echo '<strong style="color:red"> introduce contraseña de mas de 5 letras </strong>'; 
                }
            }
        ?>
        <form method="POST" action="procesar_formulario.php"
              <label for="nombre">Nombre</label></br>
            <input type="text" name="nombre" requried="required" pattern="[A-Za-z]+"></br>
    
                <label for="apellidos">Apellidos</label></br>
            <input type="text" name="apellidos" requried="required" pattern="[A-Za-z]+"></br>
            
              <label for="edad">Edad</label></br>
              <input type="number" name="edad" requried="required" pattern="[0-9]+"></br>
              
               <label for="email">email</label></br>
              <input type="email" name="email" requried="required"></br>
              
              <label for="pass">Contraseña</label></br>
              <input type="password" name="pass"></br>
              
              <input type="submit" value="enviar">
    </form>
        
        
    </body>
</html>
