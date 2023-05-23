
<?php
    // require 'conexao.php';
    
    // if(isset($_POST['modelo'])){
    //     $sql = $conexao->prepare("INSERT INTO tb_modelos VALUES(?,?,?,?,?,?,?,?)");
    //     $sql->execute(array($_POST['modelo'],$_POST['lab1'],$_POST['lab2'],$_POST['lab3'],$_POST['lab4'],$_POST['lab5'],$_POST['lab6'],''));
    //     echo 'Modelo inserido com sucesso';
    //     header("location:modificar_inventario.php");
    // }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <title>Início</title>
</head>
<body>
    <?php
        if(isset($_GET['perf']) && !empty($_GET['perf'])) {
            session_start();
            if ((!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) && (!isset($_SESSION['senha']) || empty($_SESSION['senha']))){
                header('Location: login.php');
                exit;
            }
    ?>
    <h1> Bem vindo ao Inventário do SMD!</h1>
    <h2>Perfil de administrador</h2>
    <h2>Selecione um laboratório</h2>
    <a href="info_laboratorios.php?lab=1&perf=adm"><button>Laboratório 1</button></a>
    <a href="info_laboratorios.php?lab=2&perf=adm""><button>Laboratório 2</button></a>
    <a href="info_laboratorios.php?lab=3&perf=adm""><button>Laboratório 3</button></a>
    <a href="info_laboratorios.php?lab=4&perf=adm""><button>Laboratório 4</button></a>
    <a href="info_laboratorios.php?lab=5&perf=adm""><button>Laboratório 5</button></a>
    <a href="info_laboratorios.php?lab=6&perf=adm""><button>Laboratório 6</button></a>
    <a href="modificar_inventario.php"><button> modificar </button></a>
    <a href="logout.php"><button>Sair da conta</button></a>

    <?php } else {  ?>
    
    <h1> Bem vindo ao Inventário do SMD!</h1>   
    
    <section>
        <h2>Selecione um laboratório</h2>
        <article>
            <a href="info_laboratorios.php?lab=1"><button>Laboratório 1</button></a>
            <a href="info_laboratorios.php?lab=2"><button>Laboratório 2</button></a>
            <a href="info_laboratorios.php?lab=3"><button>Laboratório 3</button></a>
            <a href="info_laboratorios.php?lab=4"><button>Laboratório 4</button></a>
            <a href="info_laboratorios.php?lab=5"><button>Laboratório 5</button></a>
            <a href="info_laboratorios.php?lab=6"><button>Laboratório 6</button></a>
        </article>
        <br>
        <a href="login.php"><button>login</button></a>
    </section>

    <?php };?>
    <br><hr>
    
    <?php
    
        // include('conexao.php');

        // $pesquisa = $_GET['busca']; 
        // $sql_code = "SELECT * from tb_modelos WHERE modelo LIKE '%$pesquisa%' ";

    ?>

    <form action="">
        <input type="search" name="busca" placeholder="Pesquisar modelo">
        <button type="submit">Buscar</button>
    </form>    
    
    <table border="1">
        <tr>
            <th>Modelo</th>
            <th>Lab1</th>
            <th>Lab2</th>
            <th>Lab3</th>
            <th>Lab4</th>
            <th>Lab5</th>
            <th>Lab6</th>
        </tr>
        <tr>
            <td colspan ="7">O resultado da pesquisa vem aqui</td>
        </tr>
    </table>

</body>
</html>