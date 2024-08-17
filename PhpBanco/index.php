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
        $nome_servidor = "localhost";
        $nome_usuario = "root"; 
        $senha = "root";
        
        $conecta = new mysqli($nome_servidor, $nome_usuario, $senha);
        if ($conecta->connect_error){
            die("Conexão falhou:" .$conecta->connect_error."<br>");
        }
        echo "Conexão realizada com sucesso";
        $conecta->close();
        ?>
    </body>
</html>
