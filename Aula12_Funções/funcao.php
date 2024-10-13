<?php
// Definindo a função para somar dois números
function somar($a, $b) {
    return $a + $b;
}

// Definindo a função para exibir uma mensagem personalizada
function exibirMensagem($nome) {
    echo "Olá, $nome! Bem-vindo ao nosso site.";
}

// Chamar a função somar e armazenar o resultado
$resultado = somar(5, 7);

// Exibir o resultado da soma
echo "A soma de 5 e 7 é: $resultado<br>";

// Chamar a função exibirMensagem
exibirMensagem("Luiz");
?>
