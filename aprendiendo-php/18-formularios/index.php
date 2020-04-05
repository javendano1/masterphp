<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>formularios php y html</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre"> Nombre </label>
            <input type="text" name="nombre" />
            
            <label for="apellido"> Apellido:</label>
            <input type="text" name="apellido" />
            
            <label for="boton"> boton</label>
            <input type="button" name="boton" value="clicame" />
            <br/>
            <label for="sexo"> sexo:</label>
            <p>
            hombre: <input type="checkbox" name="sexo" value="hombre"/>
            Mujer: <input type="checkbox" name="sexo" value="mujer"/>
            
        </p>
            
            <label for="color"> color:</label>
            <input type="color" name="color" />
            
            <label for="fecha"> fecha:</label>
            <input type="date" name="fecha" />
            
            <label for="correo"> correo:</label>
            <input type="email" name="correo" />
            
            <label for="archivo"> archivo:</label>
            <input type="file" name="archivo" multiple="multiple" />
            
           <label for="numero"> numero:</label>
            <input type="number" name="numero" />
            
            <label for="pass"> pass:</label>
            <input type="password" name="pass" />
            
            <label for="continente"> continente:</label>
            sudamerica: <input type="radio" name="continente" value="america del sur" />
            Europa: <input type="radio" name="continente" value="europa" />
            Asia: <input type="radio" name="continente" value="asia" />
            
            
            
            <label for="url"> url:</label>
            <input type="url" name="url" />
            
            <textarea></textarea>
            
            peliculas
            <select name="peliculas">
                <option>spiderman</option>
                 <option>superman</option> 
                 <option>gran turismo</option>
                  <option>otras</option>
                   <option>etc</option>
                 
            </select>
            
            <input  type="submit" value="enviar" />
              
            
            
        </form>
    
    
    
    </body>
    
    
    
</html>