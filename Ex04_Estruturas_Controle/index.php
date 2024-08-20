<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Estrutura de controle</title>
    </head>
    <body>
        <?php
        /*Desenvolva um script PHP que utilize uma estrutura condicional (if/else) 
         * para verificar se um número é positivo ou negativo.
         */
        // Definindo o número a ser verificado
            $numero = -8;

            // Positivo ou negativo
            if ($numero > 0) {
                echo "O número $numero é positivo.";
            } elseif ($numero < 0) {
                echo "O número $numero é negativo.";
            } else {
                echo "O número é zero.";
            }
        ?>
    </body>
</html>
