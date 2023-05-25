<?php
    require 'login_seguranca.php';
    require 'conexao.php';
    if(isset($_POST) && !empty($_POST)){
        $id = $_GET['id'];
        $fabricante = $_POST['fabricante'];
        $modelo = $_POST['modelo'];
        $processador = $_POST['processador'];
        $cpu_mark = $_POST['cpu_mark'];
        $mem_capacidade = $_POST['mem_capacidade'];
        $mem_tipo = $_POST['mem_tipo'];
        $disco1_capacidade = $_POST['disco1_capacidade'];
        $disco1_tipo = $_POST['disco1_tipo'];
        $disco1_modelo = $_POST['disco1_modelo'];
        $disco2_capacidade = $_POST['disco2_capacidade'];
        $disco2_tipo = $_POST['disco2_tipo'];
        $disco2_modelo = $_POST['disco2_modelo'];
        $so_nome = $_POST['so_nome'];
        $so_compilacao = $_POST['so_compilacao'];

        $sql = $conexao->prepare(
            "UPDATE
                tb_info_modelos

             SET
                fabricante = '$fabricante',
                modelo = '$modelo',
                processador = '$processador',
                cpu_mark = '$cpu_mark',
                mem_capacidade = '$mem_capacidade',
                mem_tipo = '$mem_tipo',
                disco1_capacidade = '$disco1_capacidade',
                disco1_tipo = '$disco1_tipo',
                disco1_modelo = '$disco1_modelo',
                disco2_capacidade = '$disco2_capacidade',
                disco2_tipo = '$disco2_tipo',
                disco2_modelo = '$disco2_modelo',
                so_nome = '$so_nome',
                so_compilacao = '$so_compilacao'

            WHERE
                id = $id

        
            ");
        $sql->execute();
        header("location:tabela_modelos.php");
        
        

    } else if(isset($_GET['id']) && !empty($_GET['id'])){

        $sql = $conexao->prepare("SELECT * FROM tb_info_modelos WHERE id =".$_GET['id']);
        $sql->execute();
        $dados = $sql->fetchAll();
        $fabricante = $dados[0]['fabricante'];
        $modelo = $dados[0]['modelo'];
        $processador = $dados[0]['processador'];
        $cpu_mark = $dados[0]['cpu_mark'];
        $mem_capacidade = $dados[0]['mem_capacidade'];
        $mem_tipo = $dados[0]['mem_tipo'];
        $disco1_capacidade = $dados[0]['disco1_capacidade'];
        $disco1_tipo = $dados[0]['disco1_tipo'];
        $disco1_modelo = $dados[0]['disco1_modelo'];
        $disco2_capacidade = $dados[0]['disco2_capacidade'];
        $disco2_tipo = $dados[0]['disco2_tipo'];
        $disco2_modelo = $dados[0]['disco2_modelo'];
        $so_nome = $dados[0]['so_nome'];
        $so_compilacao = $dados[0]['so_compilacao'];
        
        
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Modelo </title>
</head>
<body>
    <h1>Atualizae um modelo</h1>

    <form  method="post">
        <input type="text" name="fabricante" placeholder="Fabricante" required value=<?php echo $fabricante;?>>
        <input type="text" name="modelo" placeholder="Modelo" value=<?php echo $modelo;?>>
        <input type="text" name="processador" placeholder="Procesador" value=<?php echo $processador;?>>
        <input type="text" name="cpu_mark" placeholder="CPU mark" value=<?php echo $cpu_mark;?>>
        <input type="text" name="mem_capacidade" placeholder="Mem_capacidade" value=<?php echo $mem_capacidade;?>>
        <input type="text" name="mem_tipo" placeholder="Mem_tipo" value=<?php echo $mem_tipo;?>>
        <input type="text" name="disco1_capacidade" placeholder="disc1_capacidade" value=<?php echo $disco1_capacidade;?>>
        <input type="text" name="disco1_tipo" placeholder="disc1_tipo" value=<?php echo $disco1_tipo;?>>
        <input type="text" name="disco1_modelo" placeholder="disc1_modelo" value=<?php echo $disco1_modelo;?>>
        <input type="text" name="disco2_capacidade" placeholder="disc2_capacidade" value=<?php echo $disco2_capacidade;?>>
        <input type="text" name="disco2_tipo" placeholder="disc2_tipo" value=<?php echo $disco2_tipo;?>>
        <input type="text" name="disco2_modelo" placeholder="disc2_modelo" value=<?php echo $disco2_modelo;?>>
        <input type="text" name="so_nome" placeholder="SO_nome" value=<?php echo $so_nome;?>>
        <input type="text" name="so_compilacao" placeholder="SO_compilação" value=<?php echo $so_compilacao;?>>
        
        

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
    

