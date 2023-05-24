<?php
    
    require_once 'conexao.php';

    if(isset($_GET['delete'])){
        $id = (int)$_GET['delete'];
        $pdo->exec("DELETE FROM produtos WHERE id=$id");
        echo 'Deletado com sucesso! ' . '<hr>';
    }

    $sql = $pdo->prepare("SELECT * FROM produtos");
        $sql->execute();

        $fetchProdutos = $sql->fetchAll();

?>