<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está autenticado
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php'); // Redireciona para a página de login se não estiver autenticado
    exit();
}

// Você pode realizar verificações adicionais aqui, como confirmações de dados ou outras condições
$verification_passed = true; // Simulação de uma verificação bem-sucedida

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Verificação de Usuário</title>
</head>
<body>
    <h2>Verificação de Usuário</h2>
    <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <p>Seus dados foram validados com sucesso. </p>


    <br>
    <a href="logout.php">Sair</a>
</body>
</html>
