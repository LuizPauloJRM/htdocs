<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>AND e XOR</title>
    </head>
    <body>
        <?php
            $x = 5;
            $y = 3;
            if($x>1 AND $y>1)
                echo "ambos os testes são verdadeiros<br>";
            else
             echo "um dos testes é falso<br>";
            
            $x = 5;
            $y = 3;
            if($x>1 XOR $y>1)
                echo "apenas um dos testes é verdadeiro<br>";
            else
                echo "ou os dois testes são verdadeiros ou os dois são falsos<br>";
           
            $x = true;
             if(!$x)
                echo "teste retorna true<br>";
             else
                echo "teste retorna false<br>";
         ?>
 
    </body>
</html>
