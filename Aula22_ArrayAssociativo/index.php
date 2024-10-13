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
        $array = array("Luiz" => 1, "Paulo" => 2);
        foreach ($array as $indice => $conteudo) {
        echo "\$array[$indice] = $conteudo.<br>"; // Mostra todas as posições do array
        }
        ?>
    </body>
</html>
