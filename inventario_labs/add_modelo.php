<?php
    require 'conexao.php';
    require 'login_seguranca.php';
    $id_lab = $_GET['lab'];

    $query_modelo = $conexao->prepare("SELECT id,lab".$id_lab.",modelo FROM tb_modelos");
    $query_modelo->execute();
    $dados_modelo = $query_modelo->fetchAll(PDO::FETCH_ASSOC);
    echo '<h1> Selecione um modelo</h1>';
   // echo '<pre>';
    //print_r($dados_soft);
    echo '</pre>';
    foreach ($dados_modelo as $key => $value) {
        if($dados_modelo[$key]['lab'.$id_lab] == 0){
            $id_modelo = $dados_modelo[$key]['id'];   
            echo '<a href="add_modelo.php?lab='.$id_lab.'&perf=adm&id='.$id_modelo.'">'.$dados_modelo[$key]['modelo'].'</a>';
            echo '<br>';
        }
    }
    echo '<a href="info_laboratorios.php?lab='.$id_lab.'&perf=adm"><button>Voltar</buttton></a>';
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id_modelo = $_GET['id'];
        $query_add_modelo = $conexao->prepare(
            "UPDATE
                tb_modelos
            SET 
                lab".$id_lab." = 1
            WHERE
                id = $id_modelo

        ");
        $query_add_modelo->execute();
        header("location:add_modelo.php?lab=".$id_lab."&perf=adm");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Adicionar Modelo</title>
</head>
<body>
    
</body>
</html>
