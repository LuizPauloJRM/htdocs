<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here<?php
 $nome_servidor = "localhost";
 $nome_usuario = "root";
 $senha = "root";
 // Criar conexão
 $conecta = new mysqli($nome_servidor, $nome_usuario, $senha);
 // Verificar Conexão
 if ($conecta->connect_error) {
 die("Conexão falhou: " . $conecta->connect_error."<br>");
 }
 echo "Conexão realizada com sucesso <br>";
 // Criar tabela
 $sql = "CREATE TABLE participantes(
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 nome VARCHAR(30) NOT NULL,
 sobrenome VARCHAR(30) NOT NULL,
 email VARCHAR(50)
 )";
?>
        ?>
    </body>
</html>
