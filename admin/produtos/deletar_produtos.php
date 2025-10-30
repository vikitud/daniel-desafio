<?php
    echo "<h2>Administração de Produtos</h2>";
    
    require_once "config.inc.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        $id = intval($_POST['id']);

        if ($id <= 0) {
            echo "<p>ID inválido.</p>";
            echo '<p><a href="index.php?pg=form_produtos">Voltar ao formulário</a></p>';
            exit;
        }

        $sql = "DELETE FROM produtos WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "<p>Produto deletado com sucesso!</p>";
            echo '<p><a href="index.php?pg=admin_produtos">Voltar para a lista de produtos</a></p>';
        } else {
            echo "<p>Erro ao deletar produto: " . mysqli_error($conn) . "</p>";
            echo '<p><a href="index.php?pg=form_produtos">Tentar novamente</a></p>';
        }
    } else {
        echo "<p>Dados insuficientes para deletar.</p>";
        echo '<p><a href="index.php?pg=form_produtos">Voltar ao formulário</a></p>';
    }
?>