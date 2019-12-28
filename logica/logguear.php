<?php
require'conexion.php';
session_start();

$usuario = $_POST['user'];
$pass = $_POST['pass'];


$q = "select count (*) as contar from usuariostbl where usuario = '$usuario' and password = '$pass'";

$consultaT = mysqli_query($conexion,$q);
$arrayCon = mysqli_fetch_array($consultaT);


if($arrayCon['contar']>0){
    $_SESSION['username'] = $usuario;
    header("location: ../paginaPrincipal.php");
}else{
  echo "datos incorddrectos";
}

?>