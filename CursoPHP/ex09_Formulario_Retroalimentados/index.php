<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="Style.css">
    <title>Formulário retroalimentado</title>

</head>
<body>
    <?php
        //Capturando os dados do formulário
        //Passando como parametros 
        $valor1 = $_GET['valor1']??0;// name="valor1" id="valor1">
        $valor2 = $_GET['valor2']??0;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <!-- Mandar os dados para o proprio arquivo $_SERVER['PHP_SELF'] --> 
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
            <label for="valor2">Valor 2</label> 
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
            <input type="submit" value="Somar">

        </form>
    </main>
    <section id="resultado">
        <h1>Resultado</h1>
        <?php
            $soma = $valor1 + $valor2;
            echo "O resultado da soma é: $soma";
        ?>
    </section>
</body>
</html>