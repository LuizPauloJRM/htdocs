<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            //Formulário 
            //Label -> nome , sobrenome 
            //button -> enviar 
            //Method action = get -> Método de envio e aonde serão enviados para o servidor
            //name value= cad.php (arquivo) -> Valor digitados 
            //Name = sobrenome
            //value = "Medeiros"
            //Puxando dados do nome e sobrenome
            //var_dump($_GET);
            //var_dump($_POST);
            //var_dump($_REQUEST); Junção $_GET $_REQUEST $_POST $_COOKIE $_
            $nome = $_GET["nome"]??"[ERRO], usuário desconhecido , sem nome";//Se tiver nome ou se não tiver
            $sobrenome = $_GET["sobrenome"];
            echo"<p>Bem - Vindo ao meu site! $nome $sobrenome!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        
    </main>
    
</body>
</html>

