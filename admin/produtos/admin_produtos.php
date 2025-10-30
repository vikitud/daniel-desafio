<?php
    require_once "config.inc.php";

    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Lista de Produtos</title>
</head>
<body>
    <br><a href="?pg=form_produtos">Cadastrar</a>
    <div class="container">
        <h2>Lista de Produtos</h2>

        <div class="actions">
        </div>

        <?php if ($resultado && mysqli_num_rows($resultado) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th style="width:60px;">ID</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['nome']); ?></td>
                            <td><?php echo htmlspecialchars($row['preco']); ?></td>
                            <td><?php echo htmlspecialchars($row['quantidade']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="empty">Nenhum produto encontrado.</div>
        <?php endif; ?>

    </div>

    <?php
    // libera resultado e fecha conexão
    if ($resultado) { mysqli_free_result($resultado); }
    mysqli_close($conn);
    ?>
</body>
</html>