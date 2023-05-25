<?php
require 'conexao.php';
require 'login_seguranca.php';
if(isset($_GET['lab'])){
$id_lab = $_GET['lab'];
$sql = $conexao->prepare("SELECT * FROM tb_comp  WHERE lab =".$id_lab);
$sql->execute();
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabela de computadores</title>
</head>
<body>
    
    <?php
        //verifico se o usuário não clicou em nem um lab, caso não tenha clicado, mostro as opções.
        if(!isset($_GET['lab'])){
    ?>
    <a href="tabela_comp.php?lab=1"><button>lab 1</button></a>
    <a href="tabela_comp.php?lab=2"><button>lab 2</button></a>
    <a href="tabela_comp.php?lab=3"><button>lab 3</button></a>
    <a href="tabela_comp.php?lab=4"><button>lab 4</button></a>
    <a href="tabela_comp.php?lab=5"><button>lab 5</button></a>
    <a href="tabela_comp.php?lab=6"><button>lab 6</button></a>
    <a href="tabela_comp.php?lab=7"><button>lab P&D</button></a>
    <a href="modificar_inventario.php"><button>Voltar</button></a>;
    <?php } else{ ?>
    <h1>Laboratório <?php echo $_GET['lab'] < 7 ? $_GET['lab'] : 'P&D'?></h1>
    <table class="tabela">
        <tr>
            <td>Posição</td>
            <td>Fila</td>
            <td>Patrimonio</td>
            <td>Modelo</td>
            <td>IP</td>
            <td>Mesa_patrimonio</td>
            
        </tr>
        <?php
            foreach ($dados as $key => $value) {
                echo '<tr>';
                        echo "<td>{$value['posicao']}</td>";
                        echo "<td>{$value['fila']}</td>";
                        echo "<td>{$value['patrimonio']}</td>";
                        echo "<td>{$value['modelo']}</td>";
                        echo "<td>{$value['ip']}</td>";
                        echo "<td>{$value['mesa_patrimonio']}</td>";
                        echo "<td><a href='atualizar_comp.php?lab={$value['lab']}&id={$value['id_comp']}'>Editar</a></td>";
                 echo "</tr>";
            }
        ?>
    </table>
    <a href="tabela_comp.php"><button>Voltar</button></a>
    <a href="cadastro_comp.php?lab=<?php echo $id_lab;?>"><button>Cadastrar Computador</button></a>
    
    <?php } ?>
    
</body>
</html>