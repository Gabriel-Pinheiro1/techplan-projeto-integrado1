<?php
     require 'conexao.php';
     require 'login_seguranca.php';
     if(isset($_POST) && !empty($_POST)){
        $fabricante = $_POST['fabricante'];
        $modelo = $_POST['modelo'];
        $procesasdor  = $_POST['processador'];
        $cpu_m = $_POST['cpu_mark'];
        $mem_capacidade = $_POST['mem_capacidade'];
        $mem_tipo = $_POST['mem_tipo'];
        $disco1_capac = $_POST['disco1_capacidade'];
        $disco1_tipo = $_POST['disco1_tipo'];
        $disco1_modelo = $_POST['disco1_modelo'];
        $disco2_capac = $_POST['disco2_capacidade'];
        $disco2_tipo = $_POST['disco2_tipo'];
        $disco2_modelo = $_POST['disco2_modelo'];
        $so_nome = $_POST['SO_nome'];
        $so_comp = $_POST ['SO_compilacao'];
        $sql = $conexao->prepare("INSERT INTO tb_info_modelos VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $sql->execute(array($fabricante, $modelo, $procesasdor, $cpu_m, $mem_capacidade, $mem_tipo, $disco1_capac, $disco1_tipo, $disco1_modelo, $disco2_capac, $disco2_tipo, $disco2_modelo, $so_nome, $so_comp, ''));
        header("location: tabela_modelos.php");
     }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Modelo</title>
</head>
<body>
<h1>Cadastre um novo modelo</h2>
    <form  method="post">
        <input type="text" name="fabricante" placeholder="Fabricante" required>
        <input type="text" name="modelo" placeholder="Modelo">
        <input type="text" name="processador" placeholder="Procesador">
        <input type="text" name="cpu_mark" placeholder="CPU mark">
        <input type="text" name="mem_capacidade" placeholder="Mem_capacidade">
        <input type="text" name="mem_tipo" placeholder="Mem_tipo">
        <input type="text" name="disco1_capacidade" placeholder="disc1_capacidade">
        <input type="text" name="disco1_tipo" placeholder="disc1_tipo">
        <input type="text" name="disco1_modelo" placeholder="disc1_modelo">
        <input type="text" name="disco2_capacidade" placeholder="disc2_capacidade">
        <input type="text" name="disco2_tipo" placeholder="disc2_tipo">
        <input type="text" name="disco2_modelo" placeholder="disc2_modelo">
        <input type="text" name="SO_nome" placeholder="SO_nome">
        <input type="text" name="SO_compilacao" placeholder="SO_compilação">
        
        

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>