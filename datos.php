<?php

$nombre=$_REQUEST["nombre"];
echo "Bienvenido $nombre";
$edad=$_POST["edad"];
$celular=$_POST["celular"];

if ($edad>=18) {
    echo "\n eres mayor de edad su numero de celular es: $celular";
}else{
    echo"\n eres menor de edad, no podemos publicar su numero";
}  
 
?>