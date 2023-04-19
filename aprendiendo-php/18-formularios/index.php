<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipar/form-data">
            <label for="nombre">Nombre:</label>
            <p><input type="text" name="nombre" autofocus="autofocus" value="Mete tu nombre"><p/>
            <label for="apellido">Apellido:</label> 
            <p><input type="text" name="apellido"/><p/>
           <input type="submit" value="Enviar"/>
           
           <label for="boton">Boton</label> 
           <p><input type="button" name="boton" value="Boton"/><p/>
           
           <label for="sexo">Sexo:</label> 
           <p>Hombre <input type="checkbox" name="sexo" value="Hombre" checked="true"/>
            Mujer <input type="checkbox" name="sexo" value="Mujer" /><p/>
           
           <label for="color">Color</label> 
           <p><input type="color" name="color" ><p/>
            
           <label for="fecha">Fecha</label> 
           <p><input type="date" name="fecha" ><p/>
           
           <label for="correo">Correo</label> 
           <p><input type="email" name="correo" ><p/>
           
           <label for="archivo">Archivo</label> 
           <p><input type="file" name="archivo" multiple="multiple"><p/>
           
           <label for="numero">Numero</label> 
           <p><input type="number" name="numero"><p/>
           
           
           <label for="pass">Contraseña </label> 
           <p><input type="password" name="pass"><p/>
           
           <label for="continente">Continente</label> 
           <p>
           Sudamerica <input type="radio" name="continente" value="America del Sur">
           Europa <input type="radio" name="continente" value="Europa">
           Asia <input type="radio" name="continente" value="Asia">
           <p/>
           
           <label for="url">Pagina web: </label> 
           <p><input type="url" name="url"><p/>
           
           <textarea></textarea><br/>         
           
           Peliculas:
           <select name="peliculas">
               <option value="Spiderman">Spiderman</option>
               <option value="Batman">Batman</option>
               <option value="La jungla de cristal">La jungla de cristal</option>
           </select>
           
        </form>
    </body>
</html>