<?php
    require 'conexao.php';
    if(isset($_GET['lab']) && !empty($_GET['lab'])){
        $id_lab = $_GET['lab'];
        $soma = $conexao->prepare("SELECT SUM(lab".$id_lab.") FROM tb_modelos");
        $soma->execute();
        $qnt_total = $soma->fetchAll(PDO::FETCH_ASSOC);
        $total = $qnt_total[0]['SUM(lab'.$id_lab.')'];
        $sql = $conexao->prepare("SELECT id,lab".$id_lab.", modelo FROM tb_modelos");
        $sql->execute();
        $dados = $sql->fetchAll();  
        echo "<h1> Olá você está no laboratório".$id_lab."</h1>";
        echo "<h2> Quantidade de máquinas: ".$total."</h2>";
        foreach ($dados as $key => $value) {
            if($dados[$key]['lab'.$id_lab] != 0){
                
                echo 'Modelo: '.$dados[$key]['modelo']." / ";
                echo 'Quantidade: '.$dados[$key]['lab'.$id_lab];
                echo '<a href = "info_laboratorios.php?lab='.$id_lab.'&add='.$dados[$key]['id'].'"><button type="submit">+</button></a>';
                echo '<a href = "info_laboratorios.php?lab='.$id_lab.'&del='.$dados[$key]['id'].'"><button type="submit">-</button></a>';
                
                echo '<br>';
            }            
        } 
        
    }
    if(isset($_GET['add']) && !empty($_GET['add'])){
        $id_add = $_GET['add'];
        $sql = $conexao->prepare("UPDATE tb_modelos SET lab".$id_lab."=lab".$id_lab."+1 WHERE id =".$id_add);
        //echo "lab".$id_lab."=lab".$id_lab."-1 WHERE id =".$id_add;
        $sql->execute();
        header("location:info_laboratorios.php?lab=".$id_lab);               
    } 
    if(isset($_GET['del']) && !empty($_GET['del'])){
        $id_add = $_GET['del'];
        $sql = $conexao->prepare("UPDATE tb_modelos SET lab".$id_lab."=lab".$id_lab."-1 WHERE id =".$id_add);
        //echo "lab".$id_lab."=lab".$id_lab."-1 WHERE id =".$id_add;
        $sql->execute();
        header("location:info_laboratorios.php?lab=".$id_lab);               
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