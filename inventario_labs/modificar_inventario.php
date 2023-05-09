<?php
    require 'conexao.php';
    $sql = $conexao->prepare("SELECT * FROM tb_modelos");
    $sql->execute();
    $modelos = $sql->fetchAll(PDO::FETCH_ASSOC);
   

  // Tabela para mostrar o banco de dados dos equipamentos
    echo '<table>';
    echo '
        <tr>
            <td>Modelo</td>
            <td>lab1</td>
            <td>lab2</td>
            <td>lab3</td>
            <td>lab4</td>
            <td>lab5</td>
            <td>lab6</td>
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
        echo '<td><a href = "atualizar_inventario.php?id='.$value['id'].'">atualizar</a></td>';
        echo '<td><a href = "modificar_inventario.php?delete='.$value['modelo'].'">deletar</a></td>'; 
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
    



?>