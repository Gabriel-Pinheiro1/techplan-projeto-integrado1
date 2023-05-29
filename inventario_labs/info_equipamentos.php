<?php
    require'conexao.php';
    if(isset($_GET['lab'])&&!empty($_GET['lab'])){
        $id_lab = $_GET['lab'];
        $query_equip = $conexao->prepare("SELECT id,modelo,lab".$id_lab." FROM tb_equipamentos");
        $query_equip->execute();
        $dados = $query_equip->fetchAll();
        echo "<h1> Olá,  você está no laboratório ".$id_lab."</h1>";
        echo "<h2> equipamentos disponíveis: </h2>";
        

        if(isset($_GET['perf']) && !empty($_GET['perf']) && $_GET['perf'] = 'adm'){
            session_start();                

                if ((!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) && (!isset($_SESSION['senha']) || empty($_SESSION['senha']))){
                    header('Location: login.php');
                    exit;
                } else {
                    foreach ($dados as $key => $value) {
                        if($dados[$key]['lab'.$id_lab] != 0){
                    
                            echo $dados[$key]['modelo'];
                            
                            
                            echo '<a href = "info_equipamentos.php?perf=adm&lab='.$id_lab.'&del='.$dados[$key]['id'].'"><button type="submit">remover</button></a>';
                           echo '<br>';
                        }            
                    }                    
                    //echo '<a href= "add_modelo.php?lab='.$id_lab.'&perf=adm"><button>Adicionar modelo</button></a>';
                    echo '<div>';
                    echo '<a href="add_equipamentos.php?lab='.$id_lab.'&perf=adm"><button>Adicionar equipamentos</button></a>';
                    //echo '<a href = "cadastro_inventario.php?lab='.$id_lab.'"><button>Cadastrar novo modelo</button></a>';
                    echo '<a href="info_softwares.php?lab='.$id_lab.'&perf=adm"><button>Softwares</button></a>';
                    echo '<a href="info_modelos.php?lab='.$id_lab.'&perf=adm"><button>modelo</button></a>';
                    echo '<a href="index.php?perf=adm"><button>voltar ao ínicio</button></a>';
                    echo '</div>';
                    
                    
                } 
    
        } else {
            foreach ($dados as $key => $value) {
                if($dados[$key]['lab'.$id_lab] != 0){
            
                    echo $dados[$key]['modelo'];
                    
                }            
            }                    
            //echo '<a href= "add_modelo.php?lab='.$id_lab.'&perf=adm"><button>Adicionar modelo</button></a>';
            echo '<div>';  
            echo '<a href="info_softwares.php?lab='.$id_lab.'"><button>Softwares</button></a>';
            echo '<a href="info_modelo.php?lab='.$id_lab.'"><button>modelo</button></a>';
            echo '<a href="index.php?"><button>voltar ao ínicio</button></a>';
            echo '</div>';
        }
    }
    if(isset($_GET['del']) && !empty($_GET['del'])){
        $id_add = $_GET['del'];
        $sql = $conexao->prepare("UPDATE tb_equipamentos SET lab".$id_lab."=0 WHERE id =".$id_add);
        $sql->execute();
        header("location:info_equipamentos.php?perf=adm&lab=".$id_lab);               
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