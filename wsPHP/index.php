<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Primeiro Programa PHP</title>
        <style>
            h1{
                color: #80a2ff;
                text-shadow: 1px 1px 1px black;
            }
        </style>
    </head>
    <body>
        <h1>Testando o PHP</h1>
        <?php
         echo "Olá, mundo!";//Mostrar na tela 

          $name = "Luiz Paulo";
        echo "<br>";//quebra de linha 
          $idade = 24;

        echo $name; //Luiz Paulo 
        echo "</br>";
        echo $idade; // 24
        ?>
    </body>
</html>
