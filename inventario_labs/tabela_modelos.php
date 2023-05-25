<?php
    require 'conexao.php';
    require 'login_seguranca.php';

    $sql = $conexao->prepare("SELECT * FROM tb_info_modelos");
    $sql->execute();
    $modelos = $sql->fetchAll( PDO::FETCH_ASSOC);
    
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
    <h1>Modelos</h1>
    <table>
        <th>Fabricante</th>
        <th>Modelo</th>
        <th>Processador</th>
        <th>cpu_mark</th>
        <th>Mem_capacidade</th>
        <th>Mem_tipo</th>
        <th>Disco1_capacidade</th>
        <th>Disco1_tipo</th>
        <th>Disco1_modelo</th>
        <th>Disco2_capacidade</th>
        <th>Disco2_tipo</th>
        <th>Disc2_modelo</th>
        <th>SO_nome</th>
        <th>SO_compilacao</th>
        <?php
            foreach ($modelos as $key => $value) {
                echo '<tr>';
                        echo "<td>{$value['fabricante']}</td>";
                        echo "<td>{$value['modelo']}</td>";
                        echo "<td>{$value['processador']}</td>";
                        echo "<td>{$value['cpu_mark']}</td>";
                        echo "<td>{$value['mem_capacidade']}</td>";
                        echo "<td>{$value['mem_tipo']}</td>";
                        echo "<td>{$value['disco1_capacidade']}</td>";
                        echo "<td>{$value['disco1_tipo']}</td>";
                        echo "<td>{$value['disco1_modelo']}</td>";
                        echo "<td>{$value['disco2_capacidade']}</td>";
                        echo "<td>{$value['disco2_tipo']}</td>";
                        echo "<td>{$value['disco2_modelo']}</td>";
                        echo "<td>{$value['so_nome']}</td>";
                        echo "<td>{$value['so_compilacao']}</td>";
                        echo "<td><a href='atualizar_modelo.php?id={$value['id']}'>Editar</a></td>";
                        echo "<td><a href='deletar_modelo.php?id={$value['id']}'>Deletar</a></td>";
                 echo "</tr>";
            }
        
        ?>

    </table>
    <a href="modificar_inventario.php"><button>Voltar</button></a>;
    <a href="cadastro_modelo.php"><button>cadastrar</button></a>;
    

</body>
</html>