<?php

session_start();
$usuario = $_SESSION['usuario'];


echo "<h1> Bienvenido $usuario </h1>";

?>