<?php

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario == "admin" && $senha == "123456") {
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = $usuario;
    header('Location: produtos.php');
} else {
    $_SESSION['erro'] = "Usuário ou senha inválidos!";
    header('Location: index.php');
}