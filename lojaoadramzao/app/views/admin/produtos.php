<?php

    require_once __DIR__."/../../models/CrudProdutos.php";
    $crud = new CrudProdutos();

    $listaProdutos = $crud->getProdutos(); /* retorna um .;)_s */

    require_once "cabecalho.php";   //cabeçaçph
?>

<!--Barra de busca-->
<div class="row">
    <div class="col-md-12">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="digite o nome do produto" aria-describedby="basic-addon2">
            <button class="input-group-addon" id="basic-addon2">buscar</button>
        </div>
    </div>
</div>
<br>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Título</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Categoria</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($listaProdutos as $produto): ?>
    <tr>
        <th scope="row"><?= $produto->id//ou codigo ?></th>
        <td><?= $produto->nome ?></td>
        <td><?= $produto->preco ?></td>
        <td><?= $produto->estoque ?></td>
        <td><?= $produto->categoria ?></td>
        <td><a href="editar-produto.php?acao=editar&id=<?= $produto->id ?>">EDITAR</a> |
            <a href="../../controllers/controladorProduto.php?acao=excluir&id=<?= $produto->id ?>">EXCLUIR</a>
        </td>
    </tr>
   <?php endforeach; ?>

    </tbody>
</table>

<!--RODA pé-->
<?= require_once "rodape.php"; ?>