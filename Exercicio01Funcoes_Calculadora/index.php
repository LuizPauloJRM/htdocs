<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora PHP</h1>
    <!-- Formulário para inserir os números e selecionar a operação -->
    <form method="POST">
        <label for="num1">Digite um número :</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        
        <label for="num2">Digite outro número:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        
        <label for="operation">Operação:</label>
        <select id="operation" name="operation">
            <option value="add">Soma</option>
            <option value="subtract">Subtração</option>
            <option value="multiply">Multiplicação</option>
            <option value="divide">Divisão</option>
        </select>
        <br><br>
        
        <button type="submit">Calcular</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Captura os valores dos campos de entrada
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        // Funções para as operações matemáticas
        function adicao($a, $b) {
            return $a + $b;
        }

        function subtracao($a, $b) {
            return $a - $b;
        }

        function multiplicacao($a, $b) {
            return $a * $b;
        }

        function divisao($a, $b) {
            // Evita divisão por zero
            if ($b == 0) {
                return "Erro: Divisão por zero!";
            }
            return $a / $b;
        }

        // Switch para selecionar a operação baseada na escolha do usuário
        switch ($operation) {
            case 'add':
                $result = adicao($num1, $num2);
                break;
            case 'subtract':
                $result = subtracao($num1, $num2);
                break;
            case 'multiply':
                $result = multiplicacao($num1, $num2);
                break;
            case 'divide':
                $result = divisao($num1, $num2);
                break;
            default:
                $result = "Operação inválida!";
                break;
        }

        // Resultado da operação
        echo "<h3>Resultado da operação : $result</h3>";
    }
    ?>
</body>
</html>
