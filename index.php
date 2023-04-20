<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php require_once('planilha.php') ?>
    
    <title>Document</title>
</head>
<body>
    <h1>Bem Vindo!</h1>
    <h2>Selecione um labaratório</h2>
  
   <?php 
      foreach ($valores as $chave => $value) {
            echo '<a href = "?page=' .($chave + 1).'" >'. ($chave + 1). '</a>';
      }
   
   ?>
   <h2>
    <?php
        $lab = (isset($_GET['page']) ? $_GET['page']  : " ");
        if($lab != " "){
            echo 'Numero de máquinas: '.$valores [$lab - 1][1];
            echo '</br>';
            echo '<a href="index.php"><input type="button" value="redefinir"></a>';
        }            
    ?>
    

   </h2>


    
</body>
</html>