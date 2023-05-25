<?php
require 'conexao.php';
require 'login_seguranca.php';
if(isset($_GET['lab']) && !empty($_GET['lab'])){
    if(isset($_POST['posicao']) && !empty($_POST['posicao'])){
        $posicao = $_POST[ 'posicao'];
        $fila = (int)$_POST['fila'];
        $patrimonio = $_POST['patrimonio'];
        $modelo = $_POST['modelo'];
        $ip = $_POST['ip'];
        $mesa_patrimonio = $_POST['mesa_patrimonio'];
        $sql = $conexao->prepare("INSERT INTO tb_comp VALUES(?,?,?,?,?,?,?,?)");
        $sql->execute(array('',$posicao,$fila,$patrimonio,$modelo,$ip,$mesa_patrimonio,$_GET['lab']));
    }

    

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar computador</title>
</head>
<body>
    <form  method="post">
        <input type="text" name="posicao" placeholder="Posição" required>
        <input type="text" name="fila" placeholder="Fila">
        <input type="text" name="patrimonio" placeholder="patrimonio">
        <input type="text" name="modelo" placeholder="modelo">
        <input type="text" name="ip" placeholder="IP">
        <input type="text" name="mesa_patrimonio" placeholder="Patrimonio da mesa">
        
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>