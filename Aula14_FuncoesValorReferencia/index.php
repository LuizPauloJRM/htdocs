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
            // Função que passa o parâmetro por valor
            function passagemPorValor($num) {
            $num += 10;
            echo "Dentro da função (por valor): $num\n";
            }
            //Parametro por referência 
            function passagemPorReferencia(&$num){
            $num +=10;
            echo "Dentro de funcao (por referência): $num\n";
            }
                        // Variável inicial
            $valor = 5;
            echo "Valor original: $valor\n";
            // Chamada da função com passagem por valor
            passagemPorValor($valor);
            echo "Após chamada (por valor): $valor\n";
            // Chamada da função com passagem por referência
            passagemPorReferencia($valor);
            echo "Após chamada (por referência): $valor\n"; 
        ?>
    </body>
</html>
