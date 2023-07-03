<?php
    
    require 'conexao.php';
    $id_lab = $_GET['lab'];
    $query_soft = $conexao->prepare("SELECT id,lab".$id_lab.",software, imagem FROM tabela_softwares");
    $query_soft->execute();
    $dados_soft = $query_soft->fetchAll(PDO::FETCH_ASSOC);
  
    echo "<h1> Olá,  você está no laboratório ".$id_lab."</h1>";
    echo "<h2> Softwares dispiníveis: </h2>";



    if(isset($_GET['perf']) && !empty($_GET['perf']) && $_GET['perf'] = 'adm'){
        session_start();                

            if ((!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) && (!isset($_SESSION['senha']) || empty($_SESSION['senha']))){
                header('Location: login.php');
                exit;
            } else { 
                foreach ($dados_soft as $key => $value) {
                    if($dados_soft[$key]['lab'.$id_lab] != 0){
                        echo $dados_soft[$key]['software'];
                        echo '<br>';
                    }
                    
                }
                echo '<div>';
                echo '<a href="info_laboratorios.php?lab='.$id_lab.'&perf=adm"><button>Modelos</button></a>';
                echo '<a href="add_softwares.php?lab='.$id_lab.'&perf=adm"><button>Adicionar softwares</button></a>';
                echo '<a href="info_equipamentos.php?lab='.$id_lab.'&perf=adm"><button>equipamentos</button></a>';
                echo '<a href="index.php?perf=adm"><button>voltar ao ínicio</button></a>';
                echo '</div>';               
            }

    } else{

       foreach ($dados_soft as $key => $value) {
        if($dados_soft[$key]['lab'.$id_lab] != 0){
            echo $dados_soft[$key]['software'];
            echo '<br>';
            
            echo '<img src="assets/'.$dados_soft[$key]['imagem'].'" alt="" width = "100px" height ="100px">';
            
          
            echo '<br>';
        }
        
    }   echo '<div>';
       echo '<a href="info_laboratorios.php?lab='.$id_lab.'"><button>Modelos</button></a>';
       echo '<a href="info_equipamentos.php?lab='.$id_lab.'"><button>equipamentos</button></a>';
       echo '<a href="index.php"><button>voltar ao ínicio</button></a>';
       echo '</div>';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Softwares</title>
</head>
<body>
    <img src="" alt="">
</body>
</html>