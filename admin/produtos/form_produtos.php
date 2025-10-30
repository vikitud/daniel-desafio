<?php
    echo "<h2>Administração de Produtos</h2>";
?>
<h3>Cadastrar Produto</h3>
<form action="?pg=cadastrar_produtos" method="POST">
    <label for="produto">Nome do Produto:</label>
    <input type="text" id="produto" name="produto" required>
    <label for="preco">Preço:</label>
    <input type="number" step="0.01" id="preco" name="preco" required>
    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao" required></textarea>
    <button type="submit">Cadastrar Produto</button>
</form>

<hr>

<h3>Atualizar Produto</h3>
<p>Informe o ID do produto existente e os novos dados.</p>
<form action="?pg=atualizar_produtos" method="POST">
    <label for="id_up">ID:</label>
    <input type="number" id="id_up" name="id" required>
    <label for="produto_up">Nome do Produto:</label>
    <input type="text" id="produto_up" name="produto" required>
    <label for="preco_up">Preço:</label>
    <input type="number" step="0.01" id="preco_up" name="preco" required>
    <label for="descricao_up">Descrição:</label>
    <textarea id="descricao_up" name="descricao" required></textarea>
    <button type="submit">Atualizar Produto</button>
</form>

<hr>

<h3>Deletar Produto</h3>
<p>Informe o ID do produto que deseja remover.</p>
<form action="?pg=deletar_produtos" method="POST">
    <label for="id_del">ID:</label>
    <input type="number" id="id_del" name="id" required>
    <button type="submit">Deletar Produto</button>
</form>