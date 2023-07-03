<?php
require 'conexao.php';

if(isset($_POST['software']) && !empty($_POST['software'])){
    $name_soft = $_POST['software'];
    $soft_lab1 = (int)$_POST['lab1'];
    $soft_lab2 = (int)$_POST['lab2'];
    $soft_lab3 = (int)$_POST['lab3'];
    $soft_lab4 = (int)$_POST['lab4'];
    $soft_lab5 = (int)$_POST['lab5'];
    $soft_lab6 = (int)$_POST['lab6'];
    if(isset($_FILES['imagem']) && !empty($_FILES['imagem'])){
        $imagem = "img_software/".$_FILES['imagem']['name'];
        move_uploaded_file($_FILES['imagem']['tmp_name'], "assets/".$imagem);
    } else {
        $imagem = "";
    }
    $query_cadastrar_soft = $conexao->prepare( "INSERT INTO tabela_softwares(software,lab1,lab2,lab3,lab4,lab5,lab6,imagem)  VALUES('$name_soft',$soft_lab1,$soft_lab2,$soft_lab3,$soft_lab4,$soft_lab5,$soft_lab6,'$imagem')");
    $query_cadastrar_soft->execute();

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro_soft.php" method="post" enctype="multipart/form-data">
        <input type="text" name="software" placeholder="Software">
        <input type="text" name="lab1" placeholder="lab 1">
        <input type="text" name="lab2" placeholder="lab 2">
        <input type="text" name="lab3" placeholder="lab 3">
        <input type="text" name="lab4" placeholder="lab 4">
        <input type="text" name="lab5" placeholder="lab 5">
        <input type="text" name="lab6" placeholder="lab 6">
        <input type="file" name= "imagem" accept="image/*">
        <button type="submit">Cadastrar</button>

    </form>
</body>
</html>