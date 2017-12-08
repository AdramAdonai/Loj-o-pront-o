<!-- ## !!ADICIONE O CABECALHO E O RODAPE PARA A PAGINA -->
    <?php

    require_once "cabecalho.php";
    require_once __DIR__."/../../models/CrudProdutos.php";
    require_once __DIR__."/../../models/Produto.php";

    $crud = new CrudProdutos();
    $id = $_GET['id'];
    $produto = $crud->getProduto($_GET['id']);

    ?>
<h2>Editar Produtos</h2>
<form action="../../controllers/controladorProduto.php?acao=editar" method="post">
    <div class="form-group">
        <label for="produto">Produto:</label>
        <input value="<?= $produto->nome ?>" name="nome" type="text" class="form-control" id="produto" aria-describedby="nome produto" placeholder="">
    </div>

    <div class="form-group">
        <label for="preco">Preco</label>
        <input value="<?= $produto->preco ?>" name="preco" type="number" step="0.01" class="form-control" id="preco" placeholder="">
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input value="<?= $produto->estoque ?>"name="quantidade" type="number" class="form-control" id="quantidade" placeholder="">
    </div>

    <div class="form-group">
        <label for="Categoria">Categoria</label>
        <select name="categoria" class="form-control" id="Categoria">
            <option>Fruta</option>
            <option>Legume</option>
            <option>Hortaliça</option>
        </select>
    </div>


    <div class="form-group">
        <input value="<?= $id ?>"name="id" type="hidden" class="form-control" id="id" placeholder="">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>

</form>