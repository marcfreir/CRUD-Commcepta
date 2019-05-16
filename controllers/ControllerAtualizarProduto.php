<?php
  include ("../classes/DB.php");
?>

<?php

    //Caso o botão "Atualizar" for acionado
    if (isset($_POST['btnatualizar']))
    {
        if (isset($_GET['id']))
        {
            //Guarde os dados digitados no campos de texto nas variáveis seguintes
            $produtoId = $_GET['id'];
            $produtoCodigo = $_POST['txtcodigo'];
            $produtoNome = $_POST['txtnome'];
            $produtoDescricao = $_POST['txtdescricao'];
            $produtoPreco = $_POST['txtpreco'];
            $produtoDataEntrada = $_POST['txtdataentrada'];
            $produtoDataSaida = $_POST['txtdatasaida'];
            $produtoStatus = $_POST['txtstatus'];

            
            //Aqui checa se o produto já existe no banco de dados
            if (DB::query('SELECT produtoid FROM tb_produtos WHERE produtoid=:produtoid', array(':produtoid'=>$produtoId)))
            {
                //Faça a inserção no Banco de Dados
                DB::query('UPDATE tb_produtos SET produtocodigo=:produtocodigo, produtonome=:produtonome, produtodescricao=:produtodescricao, produtopreco=:produtopreco, produtodataentrada=:produtodataentrada, produtodatasaida=:produtodatasaida, produtostatus=:produtostatus WHERE produtoid=:produtoid', array(':produtocodigo'=>$produtoCodigo, ':produtonome'=>$produtoNome, ':produtodescricao'=>$produtoDescricao, ':produtopreco'=>$produtoPreco, ':produtodataentrada'=>$produtoDataEntrada, ':produtodatasaida'=>$produtoDataSaida, ':produtostatus'=>$produtoStatus, ':produtoid'=>$produtoId));
                //Crie uma seção (Sucesso)
                session_start();
                $_SESSION['secao_sucesso'] = 'atualizado_com_sucesso';
                header("location: ../produtos.php");
            }
            else
            {
                echo "Produto não existe";
            }
        }
        else
        {
            echo "Produto não existe";
        }
    }
    else
    {
        echo "Comando incorreto";
    }
?>