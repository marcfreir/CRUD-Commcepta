<?php
  include ("../classes/DB.php");
?>

<?php

    //Caso o botão "Atualizar" for acionado
    //if (isset($_POST['btnexcluir']))
    //{
        if (isset($_GET['id']))
        {
            $produtoId = $_GET['id'];
            //Aqui checa se o produto já existe no banco de dados
            if (DB::query('SELECT produtoid FROM tb_produtos WHERE produtoid=:produtoid', array(':produtoid'=>$produtoId)))
            {
                //Faça a exclusão no Banco de Dados
                DB::query('DELETE FROM tb_produtos WHERE produtoid=:produtoid', array(':produtoid'=>$produtoId));
                //Crie uma seção (Sucesso)
                session_start();
                $_SESSION['secao_sucesso'] = 'excluido_com_sucesso';
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
    //}
    //else
    //{
    //    echo "Comando incorreto";
    //}
?>