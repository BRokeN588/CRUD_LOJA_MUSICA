<?php

$host = 'localhost';
$user = 'root';
$senha = 'root';
$banco = 'loja_musica';

$conexao = mysqli_connect($host, $user, $senha, $banco);

if (!$conexao) {
    die('Erro ao conectar ao banco de dados!');
}

mysqli_set_charset($conexao, 'utf8');