<?php

if (isset($_POST["OS"])) {
    $opc = $_POST['OS'];

}
 if( isset($_POST['usu']) ) {
     $usuario = $_POST['usu'];
    echo "usuario es:", $usuario;
     }
 if( isset($_POST['pass']) ) {
     $pass = $_POST['pass'];
    echo "Pass es:" ,$pass;
     }
 if( isset($_POST['correo']) ) {
     $correo = $_POST['correo'];
    
     }
 if( isset($_POST['doc']) ) {
     $documento = $_POST['doc'];
     
     
     }
 if( isset($_POST['nom']) ) {
     $nombre= $_POST['nom'];
     
     }
 if( isset($_POST['ap']) ) {
     $apellido= $_POST['ap'];
     }
 if( isset($_POST['Tel']) ) {
     $Telefono = $_POST['Tel'];
     }
$server='localhost';
$username='root';
$password=NULL;
$basedatos='skyfall';
try
{
    $con=new PDO("mysql:host=$server;dbname=$basedatos;",$username,$password);
}
catch(PDOExeception $e)
{
    die('Connection Failed: '.$e->getMessage());
    echo "conexion fallida";
}
?>
