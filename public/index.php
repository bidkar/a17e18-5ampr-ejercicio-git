<?php
require_once '../src/app/db/mysql.php';
require_once '../src/models/user.php';
use Models\User;

$usuario = User::NewOne('alumno','juan','lopez','juan@lopez','123');
var_dump($usuario);