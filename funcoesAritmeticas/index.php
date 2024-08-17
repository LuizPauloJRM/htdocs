<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funções aritméticas</title>
        <style>
            body{
                font: 12pt Arial;
                
            }
        </style>
    </head>
    <body>
        <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo"<h2>Valores recebidos: $v1 e $v2</h2>"
        echo "O valor absoluto de $v2 e " . abs($v2);
        ?>
    </body>
</html>
