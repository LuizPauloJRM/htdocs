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
            // Definindo uma variável global
            $nome = "Luiz"; 
            function saudacao() {
            // Acessando a variável global dentro da função
            global $nome;
            echo "Olá,bom dia! $nome!\n";
            } 
            saudacao();
        ?>
    </body>
</html>
