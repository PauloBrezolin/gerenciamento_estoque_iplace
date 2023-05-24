<!DOCTYPE html>
<html>
<head>
    <title>Produtos IPlace</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            margin-bottom: 10px;
            padding: 5px;
            width: 300px;
        }

        input[type="submit"] {
            padding: 5px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td:first-child {
            width: 30px;
            text-align: center;
        }

        .edit-link {
            margin-right: 10px;
        }

        .delete-link {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Gerenciador de produtos da loja IPlace</h1>

    <form method="post">
        <input type="text" name="nome" placeholder="Nome">
        <br>
        <input type="text" name="descricao" placeholder="Descrição">
        <br>
        <input type="text" name="preco" placeholder="Preço">
        <br>
        <input type="text" name="quantidade" placeholder="Quantidade">
        <br>
        <input type="submit" value="Adicionar">
    </form>

    <table>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>
        <?php require_once 'listar_e_apagar.php'; ?>
        <?php foreach ($fetchProdutos as $key => $value) { ?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['nome']; ?></td>
                <td><?php echo $value['descricao']; ?></td>
                <td>R$ <?php echo $value['preco']; ?></td>
                <td><?php echo $value['quantidade']; ?></td>
                <td>
                    <a class="edit-link" href="?edit=<?php echo $value['id']; ?>">Editar</a>
                    <a class="delete-link" href="?delete=<?php echo $value['id']; ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <?php if (isset($_GET['edit'])) { ?>
        <?php require_once 'editar.php'; ?>
        <?php if ($produto) { ?>
            <h2>Editar Produto</h2>
            <form method="post">
                <input type="text" name="nome" value="<?php echo $produto['nome']; ?>" placeholder="Nome">
                <br>
                <input type="text" name="descricao" value="<?php echo $produto['descricao']; ?>" placeholder="Descrição">
                <br>
                <input type="text" name="preco" value="<?php echo $produto['preco']; ?>" placeholder="Preço">
                <br>
                <input type="text" name="quantidade" value="<?php echo $produto['quantidade']; ?>" placeholder="Quantidade">
                <br>
                <input type="submit" value="Atualizar">
            </form>
        <?php } else { ?>
            <p>Produto não encontrado.</p>
        <?php } ?>
    <?php } ?>

    <?php require_once 'inserir.php'; ?>
</body>
</html>
