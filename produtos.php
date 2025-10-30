<?php

    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql);

?>
<div class="container mt-3">
    <h2>produtos atendidos pela Empresa</h2>
    <p>Detalhes dos nossos produtos por preco e estoque</p>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Produto</th>
            <th>Preco</th>
            <th>Estoque</th>
        </tr>
        </thead>
        <tbody>
        <?php
            while($produto = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?=$produto['produto']?></td>
            <td><?=$produto['preco']?></td>
            <td><?=$produto['estoque']?></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>