<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php
    // Tipos primitivos: boolean, integer, float, string$
    $numero=0x1A;
    $numero=010;//octal "0" no inicio
    echo "O valor da variável é $numero";
    $v = 300;
    var_dump($v);//Valor e tpo primitivo
    $num= 3e2;//3x10(2)
    echo "<br> O valor da variável é $num<br>";
    var_dump($num);
    $num= (int) "950";//Convertido string para INT
    var_dump($num);
    $vet =[6,2.2,"Luiz"];
    var_dump($vet);
    //Não inicializado em uma classe
    class Pessoa{
        private string $nome;
    }
    $p = new Pessoa;
    var_dump($p);

    ?>
</body>
</html>