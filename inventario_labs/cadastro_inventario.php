<?php
      require 'conexao.php';
      require 'login_seguranca.php';
      if(isset($_POST['modelo'])){
        $sql = $conexao->prepare("INSERT INTO tb_modelos VALUES(?,?,?,?,?,?,?,?)");
        $sql->execute(array($_POST['modelo'],$_POST['lab1'],$_POST['lab2'],$_POST['lab3'],$_POST['lab4'],$_POST['lab5'],$_POST['lab6'],''));
        echo 'Modelo inserido com sucesso';
        header("location:modificar_inventario.php");
      }
    
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Máquinas</title>
</head>
<body>
    <h2>Cadastre um novo modelo</h2>
    <form  method="post">
        <input type="text" name="modelo" placeholder="Modelo" required>
        <input type="text" name="lab1" placeholder="qnt_lab1">
        <input type="text" name="lab2" placeholder="qnt_lab2">
        <input type="text" name="lab3" placeholder="qnt_lab3">
        <input type="text" name="lab4" placeholder="qnt_lab4">
        <input type="text" name="lab5" placeholder="qnt_lab5">
        <input type="text" name="lab6" placeholder="qnt_lab6">
        <button type="submit">Cadastrar</button>
    </form>

    
        
</body>
</html>