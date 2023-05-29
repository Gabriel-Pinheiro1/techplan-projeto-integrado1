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

        echo "<h1> Olá,  você está no laboratório ".$id_lab."</h1>";
        echo "<h2> Quantidade de máquinas: ".$total."</h2>";
        
            // verifica se o usuário está logado no perfil de amd
            if(isset($_GET['perf']) && !empty($_GET['perf']) && $_GET['perf'] = 'adm'){
                session_start();                

                    if ((!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) && (!isset($_SESSION['senha']) || empty($_SESSION['senha']))){
                        header('Location: login.php');
                        exit;
                    } else {
                        foreach ($dados as $key => $value) {
                            if($dados[$key]['lab'.$id_lab] != 0){
                        
                                echo 'Modelo: '.$dados[$key]['modelo']." / ";
                                echo 'Quantidade: '.$dados[$key]['lab'.$id_lab];
                                echo '<a href="mostra_detalhes.php?perf=adm&lab='.$id_lab.'&detalhe='.$dados[$key]['modelo'].'"&><button>Detalhes</button></a>';
                                echo '<a href = "info_laboratorios.php?perf=adm&lab='.$id_lab.'&remove='.$dados[$key]['id'].'"><button type="submit">remover modelo</button></a>';
                                echo '<a href = "info_laboratorios.php?perf=adm&lab='.$id_lab.'&add='.$dados[$key]['id'].'"><button type="submit">+</button></a>';
                                echo '<a href = "info_laboratorios.php?perf=adm&lab='.$id_lab.'&del='.$dados[$key]['id'].'"><button type="submit">-</button></a>';
                               echo '<br>';
                            }            
                        }                    
                        //echo '<a href= "add_modelo.php?lab='.$id_lab.'&perf=adm"><button>Adicionar modelo</button></a>';
                        echo '<div>';
                        echo '<a href="add_modelo.php?lab='.$id_lab.'&perf=adm"><button>Adicionar modelos</button></a>';
                        echo '<a href = "cadastro_inventario.php?lab='.$id_lab.'"><button>Cadastrar novo modelo</button></a>';
                        echo '<a href="info_softwares.php?lab='.$id_lab.'&perf=adm"><button>Softwares</button></a>';
                        echo '<a href="info_equipamentos.php?lab='.$id_lab.'&perf=adm"><button>equipamentos</button></a>';
                        echo '<a href="index.php?perf=adm"><button>voltar ao ínicio</button></a>';
                        echo '</div>';
                        
                        
                    }
        
            } else {
                foreach ($dados as $key => $value) {
                
                    if($dados[$key]['lab'.$id_lab] != 0){
                           
                           echo 'Modelo: '.$dados[$key]['modelo']." / ";
                           echo 'Quantidade: '.$dados[$key]['lab'.$id_lab];
                           echo '<br>';
                           echo '<a href="mostra_detalhes.php?lab='.$id_lab.'&detalhe='.$dados[$key]['modelo'].'"&><button>Detalhes</button></a>';
                       }
                                   
               }
               echo '<div>';
               echo '<a href="info_softwares.php?lab='.$id_lab.'"><button>Softwares</button></a>';
               echo '<a href="info_equipamentos.php?lab='.$id_lab.'"><button>equipamentos</button></a>';
               echo '<a href="index.php"><button>voltar ao ínicio</button></a>';
               echo '</div>';
              
            }
        
           
        
    }
    if(isset($_GET['add']) && !empty($_GET['add'])){
        $id_add = $_GET['add'];
        $sql = $conexao->prepare("UPDATE tb_modelos SET lab".$id_lab."=lab".$id_lab."+1 WHERE id =".$id_add);
        $sql->execute();
        header("location:info_laboratorios.php?perf=adm&lab=".$id_lab);               
    } 
    if(isset($_GET['del']) && !empty($_GET['del'])){
        $id_add = $_GET['del'];
        $sql = $conexao->prepare("UPDATE tb_modelos SET lab".$id_lab."=lab".$id_lab."-1 WHERE id =".$id_add);
        $sql->execute();
        header("location:info_laboratorios.php?perf=adm&lab=".$id_lab);               
    } 
    if(isset($_GET['remove']) && !empty($_GET['remove'])){
        $id_remove = $_GET['remove'];
        $sql = $conexao->prepare("UPDATE tb_modelos SET lab".$id_lab."=0 WHERE id =".$id_remove);
        $sql->execute();
        header("location:info_laboratorios.php?perf=adm&lab=".$id_lab);               
    }                    

    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Laboratórios</title>
    
</head>
<body>
</body>
</html>