<?php

    require_once 'conexao.php';

    if (isset($_POST['nome']) && !isset($_GET['edit'])) {
        $sql = $pdo->prepare("INSERT INTO produtos (nome, descricao, preco, quantidade) VALUES (?, ?, ?, ?)");
        $sql->execute(array(
            $_POST['nome'], 
            $_POST['descricao'], 
            $_POST['preco'], 
            $_POST['quantidade']));
        echo 'Inserido com sucesso!';
    }


?>
