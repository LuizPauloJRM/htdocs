<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operadores aritméticos #2</title>
         <style>
        body{
            font: 20px arial
        }
       </style>
    </head>
    <body>
        <h1>Operadores aritméticos</h1>
            
        <?php
        $n1 = 3;
        $n2 = 5;
        echo "SOMA: 3+5=" . ($n1 + $n2);
        echo "<br>SUBTRAÇÃO: 3 - 5=" . ($n1 - $n2);
        echo "<br>MULTIPLICAÇÃO: 3 * 5=" . ($n1 * $n2);
        echo "<br>DIVISÃO: 3 / 5=" . ($n1 / $n2);
        echo "<br>MÓDULO: 3 % 5=" . ($n1 % $n2);
        
        ?>
    </body>
</html>
