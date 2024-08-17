<?php
 include('newEmptyPHP.php'); 
 if(isset($_POST['email'])==0){
     echo "Preencha seu e-mail";
 }else if(strlen($_POST['senha'])==0){
     echo "Preencha sua senha";
 }
 
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <style>
            body{
                font:20pt Arial;
            }
        </style>
    </head>
    <body>
        <h1>Login do usuário</h1>
        <form action="" method="POST">
            <p>
                <label>Email</label>
                <input type="text" name="email">
            </p>
            <p>
                <label>Senha</label>
                <input type="password" name="senha">
            </p>
            <p>
                <button type="submit">Entrar</button> 
            </p>
        
        
    </body>
</html>
