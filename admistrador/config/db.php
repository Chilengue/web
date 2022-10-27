<?php 

$host="localhost";
$bd= "SaiteWeb";
$usuario="root";
$contrasenha="";

try {
    $conexion= new PDO ("mysql:host=$host; dbname=$bd", $usuario, $contrasenia );
    if ($conexion) {
        echo "conectado .... ao sistema ";
    }
} 
catch (Exception $ex) 
{
echo $ex->getMessage ();    
}
?>