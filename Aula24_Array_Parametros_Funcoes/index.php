<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function somaArray($numeros) {
        $soma = 0;
        foreach ($numeros as $numero) {
        $soma += $numero;
        }
        return $soma;
        }
        $meusNumeros = [10, 20, 30, 40];
        $resultado = somaArray($meusNumeros); 
        //Passando o array como parâmetro
        echo "A soma dos números: " . $resultado;
        ?>
    </body>
</html>
