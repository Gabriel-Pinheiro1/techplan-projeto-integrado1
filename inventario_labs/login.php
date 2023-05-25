<?php
require 'conexao.php';
session_start();
if(isset($_POST) && !empty($_POST['usuario']) && !empty($_POST['senha'])){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $sql = $conexao->prepare("SELECT * FROM tb_cadastro WHERE email = '{$usuario}' AND senha = '{$senha}'");
    $sql->execute();
    $dados = $sql->fetchObject();
    $qnt = $sql->rowCount();
    if($qnt>0){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('location:index.php?perf=adm');
    }else{
        echo 'Usuário e/ou Senha errado(s)';
    }
    
}

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bem Vindo, Suporte!</h1>
    <form action="login.php" method = "post">
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario">
        <br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" >
        <button type="submit">Entrar</button>
    </form>
    
    </body>
</html>