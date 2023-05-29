<?php
    require 'conexao.php';
    require 'login_seguranca.php';  

    $id_lab = $_GET['lab'];

    $query_equip = $conexao->prepare("SELECT id,lab".$id_lab.",modelo FROM tb_equipamentos");
    $query_equip->execute();
    $dados_equip = $query_equip->fetchAll(PDO::FETCH_ASSOC);
    echo '<h1> Selecione um equipamento</h1>';

    foreach ($dados_equip as $key => $value) {
        if($dados_equip[$key]['lab'.$id_lab] == 0){
            $id_equip = $dados_equip[$key]['id'];   
            echo '<a href="add_equipamentos.php?lab='.$id_lab.'&perf=adm&id='.$id_equip.'">'.$dados_equip[$key]['modelo'].'</a>';
            echo '<br>';
        }
    }
    echo '<a href="info_equipamentos.php?lab='.$id_lab.'&perf=adm"><button>Voltar</buttton></a>';
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id_equip = $_GET['id'];
        $query_add_equip = $conexao->prepare(
            "UPDATE
                tb_equipamentos
            SET 
                lab".$id_lab." = 1
            WHERE
                id = $id_equip

        ");
        $query_add_equip->execute();
        header("location:add_equipamentos.php?lab=".$id_lab."&perf=adm");
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>