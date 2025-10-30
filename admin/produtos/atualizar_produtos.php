<?php
    echo "<h2>Administração de Produtos</h2>";
    
    require_once "config.inc.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['produto'], $_POST['preco'], $_POST['descricao'])) {
        $id       = intval($_POST['id']);
        $produto  = mysqli_real_escape_string($conn, trim($_POST['produto']));
        $preco    = mysqli_real_escape_string($conn, trim($_POST['preco']));
        $descricao = mysqli_real_escape_string($conn, trim($_POST['descricao']));

        if ($id <= 0) {
            echo "<p>ID inválido.</p>";
            echo '<p><a href="index.php?pg=form_produtos">Voltar ao formulário</a></p>';
            exit;
        }

        $sql = "UPDATE produtos SET produto='$produto', preco='$preco', descricao='$descricao' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "<p>Produto atualizado com sucesso!</p>";
            echo '<p><a href="index.php?pg=admin_produtos">Voltar para a lista de produtos</a></p>';
        } else {
            echo "<p>Erro ao atualizar produto: " . mysqli_error($conn) . "</p>";
            echo '<p><a href="index.php?pg=form_produtos">Tentar novamente</a></p>';
        }
    } else {
        echo "<p>Dados insuficientes para atualizar.</p>";
        echo '<p><a href="index.php?pg=form_produtos">Voltar ao formulário</a></p>';
    }
?>