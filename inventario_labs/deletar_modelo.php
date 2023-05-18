<?php
    require 'login_seguranca.php';
    require 'conexao.php';
    if(isset($_GET['id']) && ($_GET['id'])){
        $id = $_GET['id'];
        $sql = $conexao->prepare(
            "DELETE

            FROM
                tb_info_modelos
            WHERE
                id = $id;
        
        ");
        $sql->execute();
        header("location:tabela_modelos.php");
    }

?>