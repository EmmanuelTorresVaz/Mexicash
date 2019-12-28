<?php

$host = "localhost";
$usuario = "root";
$pass = "";
$bd="mexicashbd";

$conexion = mysqli_connect($host,$usuario,$pass,$bd);

if($conexion){
    echo "correcto";
}else{
    echo "falla";
}




?>
