
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
    <section>
        <h2>Selecione um laboratório</h2>
        <article>
            <a href="info_laboratorios.php?lab=1&perf=adm"><button>Laboratório 1</button></a>
            <a href="info_laboratorios.php?lab=2&perf=adm""><button>Laboratório 2</button></a>
            <a href="info_laboratorios.php?lab=3&perf=adm""><button>Laboratório 3</button></a>
            <a href="info_laboratorios.php?lab=4&perf=adm""><button>Laboratório 4</button></a>
            <a href="info_laboratorios.php?lab=5&perf=adm""><button>Laboratório 5</button></a>
            <a href="info_laboratorios.php?lab=6&perf=adm""><button>Laboratório 6</button></a>            
        </article>
        <br>
        <div >
            <a href="modificar_inventario.php"><button> modificar </button></a>
            <a href="logout.php"><button>Sair da conta</button></a>
        </div>
    </section>
    <?php 
        } else {  
    ?>
    
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

    <?php 
        };
    ?>
    <br><hr>
    
    <?php
    
        include('conexao.php');
        if(isset($_POST['busca']) && !empty($_POST['busca'])){
            $pesquisa = $_POST['busca']; 

            $sql_code_modelos = $conexao->prepare("SELECT * 
                from tb_modelos 
                WHERE modelo LIKE '%$pesquisa%'");
            $sql_code_modelos->execute();
            $resultado_modelos = $sql_code_modelos->fetchAll(PDO::FETCH_ASSOC);

            $sql_code_softwares = $conexao->prepare("SELECT *
                from tabela_softwares
                WHERE software LIKE '%$pesquisa%'");
            $sql_code_softwares->execute();
            $resultado_softwares = $sql_code_softwares->fetchAll(PDO::FETCH_ASSOC);


        }
    ?>

    <form method="POST" action="">
        <input type="text" name="busca" placeholder="Pesquisar modelo">
        <button type="submit">Buscar</button>
    </form>    
    <?php
         if(isset($_POST['busca']) && !empty($_POST['busca'])){ ?>
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
        <?php                
            foreach ($resultado_modelos as $resultado_modelos){
                echo ' <tr> 
                            <td><a href="tabela_modelos.php">'.$resultado_modelos['modelo'].'</a></td>
                            <td><a href="info_laboratorios.php?lab=1">'.$resultado_modelos['lab1'].'</a></td>
                            <td><a href="info_laboratorios.php?lab=2">'.$resultado_modelos['lab2'].'</a></td>
                            <td><a href="info_laboratorios.php?lab=3">'.$resultado_modelos['lab3'].'</a></td>
                            <td><a href="info_laboratorios.php?lab=4">'.$resultado_modelos['lab4'].'</a></td>
                            <td><a href="info_laboratorios.php?lab=5">'.$resultado_modelos['lab5'].'</a></td>
                            <td><a href="info_laboratorios.php?lab=6">'.$resultado_modelos['lab6'].'</a></td>
                        </tr>';            
            } 
            ?>
            <tr>
                <th>Software</th>
                <th>Lab1</th>
                <th>Lab2</th>
                <th>Lab3</th>
                <th>Lab4</th>
                <th>Lab5</th>
                <th>Lab6</th>
            </tr> 
            <?php
            // foreach ($resultado_softwares as $software){
            //     foreach($software as $valor){
            //         if ($valor){ echo $valor;}
            //     }           
            // }
            foreach ($resultado_softwares as $resultado_softwares){
                
                echo ' <tr> 
                            <td><a href="">'.$resultado_softwares['software'].'</a></td>
                            <td><a href="info_laboratorios.php?lab=1">'.$resultado_softwares['lab1'].'</a></td>
                            <td><a href="info_laboratorios.php?lab=2">'.$resultado_softwares['lab2'].'</a></td>
                            <td><a href="info_laboratorios.php?lab=3">'.$resultado_softwares['lab3'].'</a></td>
                            <td><a href="info_laboratorios.php?lab=4">'.$resultado_softwares['lab4'].'</a></td>
                            <td><a href="info_laboratorios.php?lab=5">'.$resultado_softwares['lab5'].'</a></td>
                            <td><a href="info_laboratorios.php?lab=6">'.$resultado_softwares['lab6'].'</a></td>
                        </tr>';            
            }  
         
        ?>
        </tr>         
    </table>
    <?php } ?>

</body>
</html>