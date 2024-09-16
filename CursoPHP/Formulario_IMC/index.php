<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de IMC</title>
</head>
<body>
    <h1>Calculando IMC</h1>
    <?php
        $valor1 = $_GET['valor1']??1;
        $valor2 = $_GET['valor2']??1;
        $imc = ($valor1 - 1) / (($valor2 - 1) * ($valor2 - 1));   
        echo "IMC: $imc";
    ?>

    <form action="calculo_imc.php" method="get"></form>
    <main>
        <label for="valor1">Peso (kg)</label>
        <input type="numero" name="valor1" id="valor1" value="<?php echo $valor1?>
        <label for="valor2">Altura (m)</label>
        <input type="numero" name="valor2" id="valor2" value="<?php echo $valor2?>
        <input type="submit" value="Calcular IMC">
        <div id="result"></div>

    </main>
</body>
</html>