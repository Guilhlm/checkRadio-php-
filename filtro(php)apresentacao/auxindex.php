<?php

if (isset($_GET['genero'])) {
    $busca = $_GET['genero'];
    $conexao = new PDO('mysql:host=localhost;dbname=bd_filmes', 'root', '');
    $query = "SELECT * FROM tb_filme WHERE genero LIKE '%{$busca}%' ";
    $resultado = $conexao->query($query)->fetchAll();
}

echo ('voce escoheu a opção: ');
echo $busca;
?>