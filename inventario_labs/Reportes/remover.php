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
$sql = "DELETE FROM problemas WHERE situação = 3";

$result = mysqli_query($mysqli, $sql);

if ($result) {
    echo "Os registros foram excluidos com sucesso.";
    header("Location: consulta.php");
    } else {
        echo "Nao foi possivel executar ($sql) no banco de dados: " . mysqli_error($mysqli);
        exit;
    }

?>
