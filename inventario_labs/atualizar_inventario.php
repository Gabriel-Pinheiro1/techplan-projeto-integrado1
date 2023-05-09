<?php
    require 'conexao.php';

   if(isset($_POST) && !empty($_POST)){
    $modelo = $_POST['modelo'];
    $lab1 = (int)$_POST['lab1'];
    $lab2 = (int)$_POST['lab2'];
    $lab3 = (int)$_POST['lab3'];
    $lab4 = (int)$_POST['lab4'];
    $lab5 = (int)$_POST['lab5'];
    $lab6 = (int)$_POST['lab6'];
    

    $conexao->exec("UPDATE tb_modelos SET modelo = '$modelo', lab1 = $lab1, lab2 = $lab2, lab3 = $lab3, lab4 = $lab4,lab5 = $lab5,lab6 = $lab6 WHERE id = ".$_GET['id']);

    header("location:modificar_inventario.php");
    


   } else if (isset($_GET['id']) && !empty($_GET['id'])){
       echo $_GET['id'];
       $sql = $conexao->prepare("SELECT * FROM tb_modelos WHERE id = ".$_GET['id']);
       $sql->execute();
       
       $dados = $sql->fetchAll(PDO::FETCH_ASSOC);       
       $modelo = $dados[0]['modelo'];
       $lab1 = $dados[0]['lab1'];
       $lab2 = $dados[0]['lab2'];
       $lab3 = $dados[0]['lab3'];
       $lab4 = $dados[0]['lab4'];
       $lab5 = $dados[0]['lab5'];
       $lab6 = $dados[0]['lab6'];
       
        
   }    
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h2>Atualize um modelo</h2>
        <form  method="post">
        <input type="text" name="modelo" value=<?php echo $modelo; ?> >
        <input type="text" name="lab1" value=<?php echo $lab1; ?> >
        <input type="text" name="lab2" value=<?php echo $lab2; ?> >
        <input type="text" name="lab3" value=<?php echo $lab3; ?> >
        <input type="text" name="lab4" value=<?php echo $lab4; ?> >
        <input type="text" name="lab5" value=<?php echo $lab5; ?> >
        <input type="text" name="lab6" value=<?php echo $lab6; ?> >
        <button type="submit">atualizar</button>
    </form>
</body>
</html>