<?php
    require 'conexao.php';
    require 'login_seguranca.php';
    $id_lab = $_GET['lab'];

    $query_soft = $conexao->prepare("SELECT id,lab".$id_lab.",software FROM tabela_softwares");
    $query_soft->execute();
    $dados_soft = $query_soft->fetchAll(PDO::FETCH_ASSOC);
    echo '<h1> Selecione um software</h1>';
   // echo '<pre>';
    //print_r($dados_soft);
    echo '</pre>';
    foreach ($dados_soft as $key => $value) {
        if($dados_soft[$key]['lab'.$id_lab] != 1){
            $id_soft = $dados_soft[$key]['id'];   
            echo '<a href="add_softwares.php?lab='.$id_lab.'&perf=adm&id='.$id_soft.'">'.$dados_soft[$key]['software'].'</a>';
            echo '<br>';
        }
    }
    echo '<a href="info_softwares.php?lab='.$id_lab.'&perf=adm"><button>Voltar</buttton></a>';
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id_soft = $_GET['id'];
        $query_add_software = $conexao->prepare(
            "UPDATE
                tabela_softwares
            SET 
                lab".$id_lab." = 1
            WHERE
                id = $id_soft

        ");
        $query_add_software->execute();
        header("location:add_softwares.php?lab=".$id_lab."&perf=adm");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
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