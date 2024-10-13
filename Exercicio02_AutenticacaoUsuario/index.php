<?php
session_start(); // Inicia a sessão

// Usuário e senha predefinidos (exemplo)
$valid_user = 'Luiz';
$valid_password = '1234';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica credenciais
    if ($username === $valid_user && $password === $valid_password) {
        $_SESSION['authenticated'] = true; // Marca o usuário como autenticado
        $_SESSION['username'] = $username; // Armazena o nome de usuário na sessão
        header('Location: verificacao.php'); // Redireciona para a página de verificação
        exit();
    } else {
        $error_message = "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Autenticação de usuário</title>
</head>
<body>
    <h2>Faça seu login aqui</h2>
    <form method="POST">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        
        <button type="submit">Entrar</button>
    </form>

    <?php
    // Exibe mensagem de erro, se houver
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>
</body>
</html>
