<?php
require 'conexao.php';
require 'login_seguranca.php';
// Verifico se o formulariop foi preenchido e enviado por "post". Então executo o script a seguir
if(isset($_POST) && !empty($_POST)){
    $id_comp = $_GET['id'];
    $lab = $_GET['lab'];
    $posicao = $_POST['posicao'];
    $fila = (int)$_POST['fila'];
    $patrimonio = $_POST['patrimonio'];
    $modelo = $_POST['modelo'];
    $ip = $_POST['ip'];
    $mesa_patrimonio = $_POST['mesa_patrimonio'];
    $sql = $conexao->prepare("UPDATE tb_comp SET posicao ='$posicao', fila = $fila, patrimonio = '$patrimonio', modelo = '$modelo', ip = '$ip', mesa_patrimonio = '$mesa_patrimonio' WHERE id_comp = $id_comp");
    $sql->execute();
    header("location:tabela_comp.php?lab=".$lab);

   } else {
        $id_comp = $_GET['id'];
        $sql = $conexao->prepare("SELECT * FROM tb_comp WHERE id_comp = $id_comp");
        $sql->execute();
        $dados = $sql->fetchAll();
        $posicao = $dados[0]['posicao'];
        $fila = $dados[0]['fila'];
        $patrimonio = $dados[0]['patrimonio'];
        $modelo = $dados[0]['modelo'];
        $ip = $dados[0]['ip'];
        $mesa_patrimonio = $dados[0]['mesa_patrimonio'];
        
   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atualizar computador</title>

</head>
<body>
    <h1>Atualizar modelo</h1>
<form  method="post">
        <input type="text" name="posicao" placeholder="Posição" required value="<?php echo $posicao;?>">
        <input type="text" name="fila" placeholder="Fila" value="<?php echo $fila;?>">
        <input type="text" name="patrimonio" placeholder="patrimonio" value="<?php echo $patrimonio;?>">
        <input type="text" name="modelo" placeholder="modelo" value="<?php echo $modelo;?>">
        <input type="text" name="ip" placeholder="IP" value="<?php echo $ip;?>">
        <input type="text" name="mesa_patrimonio" placeholder="Patrimonio da mesa" value="<?php echo $mesa_patrimonio;?>">
        
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>