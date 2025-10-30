<?php
    echo "<h2>Administração de Produtos</h2>";
    
    require_once "config.inc.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['produto'], $_POST['preco'], $_POST['descricao'], $_POST['categoria'])) {
        $produto = mysqli_real_escape_string($conn, trim($_POST['produto']));
        $preco   = mysqli_real_escape_string($conn, trim($_POST['preco']));
        $descricao = mysqli_real_escape_string($conn, trim($_POST['descricao']));
        $categoria = mysqli_real_escape_string($conn, trim($_POST['categoria']));

        $sql = "INSERT INTO produtos (produto, preco, descricao, categoria) VALUES ('$produto', '$preco', '$descricao', '$categoria')";
        if (mysqli_query($conn, $sql)) {
            echo "<p>Produto cadastrado com sucesso!</p>";
            echo '<p><a href="index.php?pg=admin_produtos">Voltar para a lista de produtos</a></p>';
        } else {
            echo "<p>Erro ao cadastrar produto: " . mysqli_error($conn) . "</p>";
            echo '<p><a href="index.php?pg=form_produtos">Tentar novamente</a></p>';
        }
    } else {
        echo "<p>Dados insuficientes para cadastrar.</p>";
        echo '<p><a href="index.php?pg=form_produtos">Voltar ao formulário</a></p>';
    }
?>