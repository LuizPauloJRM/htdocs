<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function criarArrayDePares($inicio, $fim) {
        $pares = [ ];
        for ($i = $inicio; $i <= $fim; $i++) {
        if ($i % 2 == 0) {
        $pares[ ] = $i; // Adiciona ao array
        }
        }
        return $pares; // Retorna o array
        }
        // A função retorna um array
        $arrayDePares = criarArrayDePares(1, 10);
        // Exibe o array retornado
        print_r($arrayDePares); 

        ?>
    </body>
</html>
