<!DOCTYPE html>
<html>

<head>
    <title>Consulta de reservas</title>
    <meta charset="utf-8" />
    
</head>

<body>
    <div class="tudo">
        <div>
            <?php
            //Config. para acesso ao mySql localmente 
            $hostname = "localhost";
            $bancodedados = "inventario_labs";
            $usuario = "root";
            $senha = "";


            $mysqli = mysqli_connect($hostname, $usuario, $senha, $bancodedados);
            if ($mysqli->connect_errno) {
                echo "Falha ao conectar:(" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
            } else {
                echo "Conectado com sucesso";
            }

            // Consulta SQL
            $sql = "SELECT id, laboratório, categoria, software, equipamento, problema, outro_problema, mesa, situação FROM problemas";

            $result = mysqli_query($mysqli, $sql);

            if (!$result) {
                echo "Nao foi possivel executar a consulta ($sql) no banco de dados: " . mysqli_error($mysqli);
                exit;
            }

            if (mysqli_num_rows($result) == 0) {
                echo "Nao foram encontradas linhas, nada para mostrar<br><br>";
            }


            // Enquanto uma linha de dados existir, coloca esta linha em $row como uma matriz associativa e mostra os dados na página
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="agrupamento> laboratório: ' . $row["laboratório"] . "<br>";
                echo 'categoria: ' . $row["categoria"] . '<br>';
                echo 'software:' . $row["software"] . '<br>';
                echo 'equipamento:' . $row["equipamento"] . '<br>';
                echo 'problema: ' . $row["problema"] . '<br>';
                echo 'outro problema: ' . $row["outro_problema"] . '<br>';
                echo 'mesa: ' . $row["mesa"] . '<br>';

                // Parte relacionada ao pagamento e validade da reserva 
                $situacao = $row["situação"];
                $id = $row["id"];
                if($situacao == 1){
                    echo 'situação: a fazer';
                    echo "<p><a href='update.php?id=$id'>Reporte em andamento</a><p></div><br>";
                }else if($situacao == 2){
                    echo 'situação: em andamento';
                    echo "<p><a href='update.php?id=$id'>Reporte concluído</a><p></div><br>";
                }else if($situacao == 3){
                    echo 'situação: feito';
                    echo "<p><a href='remover.php?id=$id'>Remover reporte</a><p></div><br>";
                }
                
            }

            ?>

            <br><a href="reportes.html">Voltar para Pagina Inicial</a>
        </div>
    </div>
</body>

</html>