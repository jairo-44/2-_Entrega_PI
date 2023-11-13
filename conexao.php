<?php
$servidor="localhost";
$usuario="root";
$senha="";
$dbname="cadastro";
$port=3306;


$conn=mysqli_connect($servidor, $usuario, $senha, $dbname);

$mysqli = new mysqli($servidor, $usuario, $senha, $dbname);