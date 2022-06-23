<?php
require_once 'dbconfig.php';
try{
    $conn=new PDO("mysql:host=$hostname;dbname=$dbname;",$username,$password);
    echo "Conexion a $dbname en $hostname exitosa";
} catch (PDOException $pex) {
    die("No se pudo conectar a $dbname;".$pex->getMESSAGE());
}
?>