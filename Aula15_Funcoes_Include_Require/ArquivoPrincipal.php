<?php
// Incluindo o arquivo funcoes.php usando require
include 'index.php';

// Chamada da função saudacao definida no arquivo funcoes.php
saudacao('Luiz');

// Mensagem após a inclusão do arquivo
echo "Código após o require ainda será executado.\n";

// Tentativa de incluir um arquivo inexistente (descomente para testar)
// require 'arquivo_inexistente.php'; // Se descomentado, gera erro fatal

// Essa linha não será exibida se o arquivo acima não for encontrado
echo "Este texto não será exibido se o arquivo não for encontrado.\n";
?>
