<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Script PHP</title>
</head>
<body>
    <h1>
       Testando o PHP 
    </h1>
    <?php
        $nome="Luiz Paulo";
        echo "<p>Olá, $nome! Seja bem-vindo.</p>".date("d/M/Y");
        echo "Hora: " . date("G:i:s");
        date_default_timezone_set("America/Sao_Paulo");
    ?>

</body>
</html>