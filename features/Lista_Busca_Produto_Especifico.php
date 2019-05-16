    <div class="table">
      <table>
        <tr>
          <th>ID</th>
          <th>Código</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Preço</th>
          <th>Entrada</th>
          <th>Saída</th>
          <th>Status</th>
          <th>Ações</th>
        </tr>

        
        <tr>
          <td><?php echo $linha['produtoid']; ?></td>
          <td><?php echo $linha['produtocodigo']; ?></td>
          <td><?php echo $linha['produtonome']; ?></td>
          <td><?php echo $linha['produtodescricao']; ?></td>
          <td><?php echo $linha['produtopreco']; ?></td>
          <td><?php echo $linha['produtodataentrada']; ?></td>
          <td><?php echo $linha['produtodatasaida']; ?></td>
          <td><?php echo $linha['produtostatus']; ?></td>
          <td class="text-center" width="180">
            <form method="post">
              <input type="submit" formaction="produtos.php?id=<?php echo $linha['produtoid']; ?>" name="btneditar" class="btn" value="Editar">
              <input type="button" onclick="confirmar(<?php echo $linha['produtoid']; //session_start(); $_SESSION['btnexcluir'] = 'excluir'; ?>)" name="btnexcluir" class="btn" id="btnexcluir" value="Excluir">

              <script type="text/javascript" src="./js/modal_excluir.js">

              </script>
            </form>

          </td>
        </tr>
        
      </table>
    </div>
