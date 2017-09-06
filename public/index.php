<?php
require_once '../src/app/db/mysql.php';
use App\DB\MySQL;

$conexion = new MySQL();
var_dump($conexion);
$conexion->close();


// $a = 10;
// $b = 2;
// $c = $a * $b;
// $a = true; // true=1 false=0
// $b = 'cadena';

// echo 'Valor de $a = '.$a.', $b = '.$b.', $c = '.$c;

// // $conexion = mysqli_connect('127.0.0.1','root','toor','bibliotecam',3306);
// // print_r($conexion);

