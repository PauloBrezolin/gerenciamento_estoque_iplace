<?php

    require_once 'conexao.php';

    if (isset($_GET['edit'])) {
        $id = (int)$_GET['edit'];
    
        if (isset($_POST['nome'])) {
            $sql = $pdo->prepare("UPDATE produtos SET nome = ?, descricao = ?, preco = ?, quantidade = ? WHERE id = ?");
            $sql->execute(array($_POST['nome'], $_POST['descricao'], $_POST['preco'], $_POST['quantidade'], $id));
            echo 'Atualizado com sucesso!';
        }
    
        $sql = $pdo->prepare("SELECT * FROM produtos WHERE id = ?");
        $sql->execute(array($id));
        $produto = $sql->fetch(PDO::FETCH_ASSOC);
    }
?>    