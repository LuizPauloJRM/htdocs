<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $produtos = [
                ["nome" => "Notebook", "preco" => 3500],
                ["nome" => "Mouse", "preco" => 50]
        ];
        foreach ($produtos as $produto) {
        echo "Nome: " . $produto["nome"] . ", Preço: R$ " . $produto["preco"] . "\n";
        }

        ?>
    </body>
</html>
