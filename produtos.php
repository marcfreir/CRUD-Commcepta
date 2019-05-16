<?php
  /*
    Subject    : CRUD – Linguagem PHP (COMMCEPTA)
    Created on : 14-May-2019, 01:48:00 PM
    Author     : Marcos Freire
  */
?>

<?php
    //Incluindo o head com as meta tags
    include ('./templates/HTML_Head.php');
?>

      <title>Produtos</title>
      <link rel='stylesheet' type='text/css' media='screen' href='./css/style_produtos.css' />
      <!-- <script src='./js/index.js'></script> -->
  </head>

<?php
    //Incluindo o controller para gerenciamento da página
    //include ('./controllsaasdasdsad/HTML_Head.php');
?>

  <body>
    <div class="menu-grid">
      <div class="grid-items-buttons">
        <button type="submit" name="btnvendedores" onclick="window.location.href = 'vendedores.php';">Vendedores</button>
      </div>
      <div class="grid-items-buttons">
        <button type="submit" name="btnvendas" onclick="window.location.href = 'vendas.php';">Vendas</button>
      </div>
      <div class="grid-items-buttons">
        <button type="submit" name="btnrelatoriovendas" onclick="window.location.href = 'relatorio_vendas.php';">Relatório</button>
      </div>
    </div>
    <div class="horizontal-rule">
      <hr><hr>
    </div>
    <h3>PRODUTOS</h3>
    <form class="" id="form" method="post">
      <div class="listagem-grid">
        <div class="grid-items">
          <label for="nome" id="nome">Nome: </label>
        </div>
        <div class="grid-items">
          <input type="text" name="txtnomesearch" value="" placeholder ="Ex.: Camisa" maxlength="32">
        </div>
      </div>
      <div class="listagem-grid">
        <div class="grid-items">
          <label for="status" id="nome">Status: </label>
        </div>
        <div class="grid-items">
          <select class="status" name="txtstatussearch">
                  <option value="todos">Todos</option>
                  <option value="Disponível">Disponível</option>
                  <option value="Indisponível">Indisponível</option>
          </select>
        </div>
        <div class="grid-items">
          <button type="submit" formaction="" name="btnbuscar">Buscar</button>
        </div>
        <div class="grid-items">
          <button type="button" name="btnlimpar" onclick="limparCampos()">Limpar</button>
          <script type="text/javascript" src="./js/limparcampos.js"></script>
        </div>
        <div class="grid-items">
          <button type="submit" name="btnnovo">Novo</button>
        </div>
      </div>
    </form>
    <div class="horizontal-rule">
      <hr><hr>
    </div>
    <?php
      include ('./controllers/ControllerProdutos.php');
    ?>
  </body>
</html>