<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';
$mysqli = new mysqli($host, $usuario, $senha, $database);

$mysqli($mysqli->error){
    die("Falha ao conectar ao banco de dados" .$mysqli->error)
        }
?>