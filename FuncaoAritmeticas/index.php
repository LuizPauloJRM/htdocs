<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funções Aritméticas</title>
        <style>
            h1{
                font:12 pt Arial; 
                color: activecaption;
                
            }
        </style>
    </head>
    <body>
        <?php
            $v1= $_GET["x"];
            $v2= $_GET["y"];
            echo "<h1>Valores recebidos: $v1 e $v2</h1>";
            echo "O valor absoluto de $v2 e " . abs($v2);
            echo "<br/>O valor de $v1<sup>$v2</sup>"
        ?>
    </body>
</html>
