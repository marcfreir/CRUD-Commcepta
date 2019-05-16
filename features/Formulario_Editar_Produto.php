    <h3>Editar Produto</h3>
    <form class="" action="./controllers/ControllerAtualizarProduto.php?id=<?php echo $linha['produtoid']; ?>" onsubmit="return validate()" id="form" name="form" method="post">
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="codigo" id="codigo">Código*: </label>
            </div>
            <div class="grid-items" id="codigo_div">
                <input type="text" name="txtcodigo" value="<?php echo $produtoCodigo; ?>" maxlength="32">
                <span class="valorerro" id="codigoerrado"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="nome" id="nome">Nome*: </label>
            </div>
            <div class="grid-items" id="nome_div">
                <input type="text" name="txtnome" value="<?php echo $produtoNome; ?>" maxlength="32">
                <span class="valorerro" id="nomeerrado"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="descricao" id="descricao">Descrição: </label>
            </div>
            <div class="grid-items" id="decricao_div">
                <input type="text" name="txtdescricao" value="<?php echo $produtoDescricao; ?>" maxlength="150">
                <span class="valorerro" id="decricaoerrada"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="preco" id="preco">Preço: </label>
            </div>
            <div class="grid-items" id="preco_div">
                <input type="text" name="txtpreco" value="<?php echo $produtoPreco; ?>" maxlength="10">
                <span class="valorerro" id="precoerrado"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="dataentrada" id="dataentrada">Data de Entrada*: </label>
            </div>
            <div class="grid-items" id="dataentrada_div">
                <input type="date" name="txtdataentrada" maxlength="10">
                <span class="valorerro" id="dataentradaerrada"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="datasaida" id="datasaida">Data de Saida: </label>
            </div>
            <div class="grid-items" id="datasaida_div">
                <input type="date" name="txtdatasaida" maxlength="10">
                <span class="valorerro" id="datasaidaerrada"></span>
            </div>
        </div>
        <div class="listagem-grid">
            <div class="grid-items">
                <label for="status" id="status">Status: </label>
            </div>
            <div class="grid-items">
                <select class="status" name="txtstatus">
                    <option value="Disponível">Disponível</option>
                    <option value="Indisponível">Indisponível</option>
                </select>
            </div>
            <div class="grid-items">
                <button type="submit" name="btnatualizar">Atualizar</button>
                <script type="text/javascript" src="./js/validar.js"></script>
            </div>
            <div class="grid-items">
                <button type="button" onclick="window.location.href = 'produtos.php';" name="btnretornar">Desistir</button>
                <!-- <input type="button" onclick="window.location.href = './produtos.php';" name="btnretornar" value="Retornar"> -->
            </div>
        </div>
    </form>