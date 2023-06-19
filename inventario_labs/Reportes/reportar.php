<?php
$laboratorio = $_POST['lab'];
$categoria = $_POST['categ'];
$soft = $_POST['soft'];
$equip = $_POST['equip'];
$problema = $_POST['prob'];
$outro_prob = $_POST['outro'];
$mesa = $_POST['mesa'];
$situacao= 1;


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

$sql = "INSERT INTO problemas (laboratório, categoria, software, equipamento, problema, outro_problema, mesa, situação) VALUES
                    ('$laboratorio', '$categoria', '$soft', '$equip', '$problema','$outro_prob', '$mesa', '$situacao')";

$result = mysqli_query($mysqli, $sql);

if ($result) {
    echo "Os registros foram inseridos com sucesso.";
    header("Location: reportes.html");
} else {
    echo "Nao foi possivel executar ($sql) no banco de dados: " . mysqli_error($mysqli);

    exit;
}
?>
