<?php
    //verificando se é um perfil de admnistrador ou não.
session_start();
if ((!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) && (!isset($_SESSION['senha']) || empty($_SESSION['senha']))){
    header('Location: login.php');
    exit;
}
?>