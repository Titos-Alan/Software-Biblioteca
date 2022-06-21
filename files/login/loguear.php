<?php
require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$Q = "SELECT COUNT(*) as contar from usuarios where usuario = '$usuario' and clave = '$clave' ";
$consulta = mysqli_query($conexion,$Q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username'] = $usuario;
    header("location: ../inicio.php");
}else{
    header("location: ../index.php");

}
?> 