<?php
  /*
    Subject    : CRUD – Linguagem PHP (COMMCEPTA)
    Created on : 14-May-2019, 05:07:27 PM
    Author     : Marcos Freire
  */
?>

<?php
  class Produtos extends DB
  {
    public function select()
    {
      $sql = "SELECT * FROM tb_produtos";

      $resultado = $this->connect()->query($sql);

      if ($resultado->rowCount() > 0)
      {
          while ($linha = $resultado->fetch())
          {
              //$dados = array($linha);
              $dados[] = $linha;
          }
          return $dados;
      }
      else
      {
          echo "Ainda não há registros";
      }
    }


    ############################
    public function create()
    {
      $sql = "SELECT * FROM tb_produtos";

      $resultado = $this->connect()->query($sql);

      if ($resultado->rowCount() > 0)
      {
          while ($linha = $resultado->fetch())
          {
              //$dados = array($linha);
              $dados[] = $linha;
          }
          return $dados;
      }
      else
      {
          echo "Ainda não há registros";
      }
    }
    ##############################
  }
?>
