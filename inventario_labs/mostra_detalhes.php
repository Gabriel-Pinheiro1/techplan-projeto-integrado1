<?php
    require'conexao.php';
    $modelo = $_GET['detalhe'];
    $query_detalhes = $conexao->prepare("SELECT * FROM tb_info_modelos WHERE modelo = '$modelo'");
    $query_detalhes->execute();
    $dados_modelo = $query_detalhes->fetchAll(PDO::FETCH_ASSOC);

    $fabricante = $dados_modelo[0]['fabricante'];
    $modelo = $dados_modelo[0]['modelo'];
    $processador = $dados_modelo[0]['processador'];
    $cpu_mark = $dados_modelo[0]['mem_capacidade'];
    $mem_tipo = $dados_modelo[0]['mem_tipo'];
    $disco1_capacidade = $dados_modelo[0]['disco1_capacidade'];
    $disco1_tipo = $dados_modelo[0]['disco1_tipo'];
    $disco1_modelo = $dados_modelo[0]['disco1_modelo'];
    $disco2_capacidade = $dados_modelo[0]['disco2_capacidade'];
    $disco2_tipo = $dados_modelo[0]['disco2_tipo'];
    $disco2_modelo = $dados_modelo[0]['disco2_modelo'];
    $so_nome= $dados_modelo[0]['so_nome'];
    $so_compilacao = $dados_modelo[0]['so_compilacao'];



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <h1>Detalhes do modelo</h1>
    <p>Fabricante: <?php  echo $fabricante;?></p>
    <p>modelo: <?php  echo $modelo;?></p>
    <p>processador: <?php  echo $processador;?></p>
    <p>cpu_mark: <?php  echo $cpu_mark;?></p>
    <p>mem_tipo: <?php  echo $mem_tipo;?></p>
    <p>disco1_capacidade: <?php  echo $disco1_capacidade;?></p>
    <p>disco1_tipo: <?php  echo $disco1_tipo;?></p>
    <p>disco1_modelo: <?php  echo $fabricante;?></p>
    <p>disco2_capacidade: <?php  echo $disco2_capacidade;?></p>
    <p>disco2_tipo: <?php  echo $disco2_tipo;?></p>
    <p>disco2_modelo: <?php  echo $disco2_modelo;?></p>
    <p>so_nome: <?php  echo $so_nome;?></p>
    <p>so_compilacao: <?php  echo $so_compilacao;?></p>
    

    
</body>
</html>