<?php
    require 'login_seguranca.php';
    require 'conexao.php';
    $sql = $conexao->prepare("SELECT * FROM tb_modelos");
    $sql->execute();
    $modelos = $sql->fetchAll(PDO::FETCH_ASSOC);
   

  // Tabela para mostrar o banco de dados dos equipamentos
    echo '<table class = "table table-striped">';
    echo '
        <tr>
            <th scope="col">Modelo</th>
            <th scope="col">lab1</th>
            <th scope="col">lab2</th>
            <th scope="col">lab3</th>
            <th scope="col">lab4</th>
            <th scope="col">lab5</th>
            <th scope="col">lab6</th>
        </tr>
    ';
    foreach ($modelos as $key => $value) {
        echo '<tr>';
        echo '<td>'.$value['modelo'].'</td>';
        echo '<td>'.$value['lab1'].'</td>';
        echo '<td>'.$value['lab2'].'</td>';
        echo '<td>'.$value['lab3'].'</td>';
        echo '<td>'.$value['lab4'].'</td>';
        echo '<td>'.$value['lab5'].'</td>';
        echo '<td>'.$value['lab6'].'</td>';
        echo '<td scope="row"><a href = "atualizar_inventario.php?id='.$value['id'].'">atualizar</a></td>';
        echo '<td scope="row"><a href = "modificar_inventario.php?delete='.$value['modelo'].'">deletar</a></td>'; 
        echo '</tr>';
        
    }
    echo '</table>';

    // Deletando modelos do banco de dados
    if(isset($_GET['delete'])){
        $modelo = $_GET['delete'];
        $conexao->exec("DELETE FROM tb_modelos WHERE modelo= '$modelo'");
        header("location:modificar_inventario.php");
    } 

    echo '<a href = "cadastro_inventario.php"><button>Cadastro</button></a>';
    
    echo '<a href="index.php?perf=adm"><button>voltar ao ínicio</button></a>';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">   
    <title>Document</title>
</head>
<body>
    <a href="tabela_comp.php"><button>Tabela de computadores</button></a>
    <a href="tabela_modelos.php"><button>Tabela de modelos</button></a>
</body>
</html>