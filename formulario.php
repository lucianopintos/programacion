<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    </head>
     <body>
         <center>
            <h1>Formulario</h1>
    
    
    
                <form action="" method="get">
                    <br> <input type="text" name="nombre" placeholder="Ingresa tu nombre"> 
                        <br> <input type="number" name="edad" placeholder="Ingresa tu edad"> 

                        <br> <input type="number" name="celular" placeholder="Ingresa tu numero de celular"> 
                        <br><input type="submit" value="Enviar">
                        <br>
                            <?php

                            $nombre1= ($_GET["nombre"]); 

                            $mensaje="Hola $nombre1 te damos la bienvenida";
echo $mensaje;
$edad1= ($_GET["edad"]); 
$celular1= ($_GET["celular"]); 
if ($edad1>=18) {
    echo "\n eres mayor de edad tu numero es $celular1";
  }  else {
        echo "\n eres menor de edad, no puedo publicar tu numero de celular";
    
    
}



?>


</form>
</body>
</center>
</html>