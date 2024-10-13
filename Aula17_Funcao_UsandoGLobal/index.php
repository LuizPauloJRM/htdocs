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
        $idade = 25;
        function mostrarIdade() {
         // Acessando a variável global usando o array superglobal $GLOBALS
         echo "Idade: " . $GLOBALS['idade'] . "\n";
        }
        mostrarIdade(); // Saída: Idade: 53
        
        ?>
    </body>
</html>
