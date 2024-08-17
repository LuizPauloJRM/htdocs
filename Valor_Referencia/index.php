<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Referencia e valor</title>
    </head>
    <body>
        <?php
            $valor1=1.90;
            echo "valor1 = $valor1 <br>";
            $valor2 =& $valor1;//Por referencia
            echo "valor2 = $valor2 <br>";
            $valor1=2.03;
            echo "valor2=$valor2<br>";
        ?>
    </body>
</html>
