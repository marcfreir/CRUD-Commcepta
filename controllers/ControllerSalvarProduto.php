<?php
  include ("../classes/DB.php");
?>

<?php
  //Caso o botão "Salvar" for acionado
  if (isset($_POST['btnsalvar']))
  {
    //Guarde os dados digitados no campos de texto nas variáveis seguintes
    $produtoCodigo = $_POST['txtcodigo'];
    $produtoNome = $_POST['txtnome'];
    $produtoDescricao = $_POST['txtdescricao'];
    $produtoPreco = $_POST['txtpreco'];
    $produtoDataEntrada = $_POST['txtdataentrada'];
    $produtoDataSaida = $_POST['txtdatasaida'];
    $produtoStatus = $_POST['txtstatus'];

    //Aqui checa se o produto já existe no banco de dados
    if (!DB::query('SELECT produtocodigo FROM tb_produtos WHERE produtocodigo=:produtocodigo', array(':produtocodigo'=>$produtoCodigo)))
    {
        //Faça a inserção no Banco de Dados
        DB::query('INSERT INTO tb_produtos VALUES (NULL, :produtocodigo, :produtonome, :produtodescricao, :produtopreco, :produtodataentrada, :produtodatasaida, :produtostatus)', array(':produtocodigo'=>$produtoCodigo, ':produtonome'=>$produtoNome, ':produtodescricao'=>$produtoDescricao, ':produtopreco'=>$produtoPreco, ':produtodataentrada'=>$produtoDataEntrada, ':produtodatasaida'=>$produtoDataSaida, ':produtostatus'=>$produtoStatus));
        //Crie uma seção (Sucesso)
        session_start();
        $_SESSION['secao_sucesso'] = 'registrado_com_sucesso';
        header("location: ../produtos.php");
    }
    else
    {
      echo "Produto já existe";
    }
  }
?>