<?php
  /*
    Subject    : CRUD – Linguagem PHP (COMMCEPTA)
    Created on : 14-May-2019, 01:48:44 PM
    Author     : Marcos Freire
  */
?>

<?php
    include ('./classes/DB.php');
    include ('./classes/Produtos.php');
?>

<?php
    //session_start();
    if (isset($_POST['btnbuscar']))
    {

        if (!$_POST['txtnomesearch'] == NULL)
        {
            $nomeSearch = $_POST['txtnomesearch'];
            $statusSearch = $_POST['txtstatussearch'];

            if (DB::query('SELECT * FROM tb_produtos WHERE produtonome=:produtonome AND produtostatus=:produtostatus', array(':produtonome'=>$nomeSearch, ':produtostatus'=>$statusSearch)))
            {
                //echo $nomeSearch;
                //die;
                $linhas = DB::query('SELECT * FROM tb_produtos WHERE produtonome=:produtonome AND produtostatus=:produtostatus', array(':produtonome'=>$nomeSearch, ':produtostatus'=>$statusSearch));

                foreach ($linhas as $linha)
                {
                    $produtoId = $linha['produtoid'];
                    $produtoCodigo = $linha['produtocodigo'];
                    $produtoNome = $linha['produtonome'];
                    $produtoDescricao = $linha['produtodescricao'];
                    $produtoPreco = $linha['produtopreco'];
                    $produtoDataEntrada = $linha['produtodataentrada'];
                    $produtoDataSaida = $linha['produtodatasaida'];
                    $produtoStatus = $linha['produtostatus'];

                    /*
                    echo $produtoId . "<br>";
                    echo $produtoCodigo . "<br>";
                    echo $produtoNome . "<br>";
                    echo $produtoDescricao . "<br>";
                    echo $produtoPreco . "<br>";
                    echo $produtoDataEntrada . "<br>";
                    echo $produtoDataSaida . "<br>";
                    echo $produtoStatus;
                    */
                    //echo $linhas[0];
                    //echo $produtoId;
                    //die;

                    include ('./features/Lista_Busca_Produto_Especifico.php');

                }
                

            }
            elseif (DB::query('SELECT * FROM tb_produtos WHERE produtonome=:produtonome', array(':produtonome'=>$nomeSearch)) && $statusSearch == "todos")
            {
                $linhas = DB::query('SELECT * FROM tb_produtos WHERE produtonome=:produtonome', array(':produtonome'=>$nomeSearch));

                foreach ($linhas as $linha)
                {
                    $produtoId = $linha['produtoid'];
                    $produtoCodigo = $linha['produtocodigo'];
                    $produtoNome = $linha['produtonome'];
                    $produtoDescricao = $linha['produtodescricao'];
                    $produtoPreco = $linha['produtopreco'];
                    $produtoDataEntrada = $linha['produtodataentrada'];
                    $produtoDataSaida = $linha['produtodatasaida'];
                    $produtoStatus = $linha['produtostatus'];

                    include ('./features/Lista_Busca_Produto_Especifico.php');

                }
            }
            else
            {
                echo "<h4 class='center'>Nada encontrado </h4><br>";
                echo "<h5 class='center'>Essa página irá Atualizar automaticamente em 60 segundos... </h5><br>";
                include ('./features/Botao_Atualizar_Lista_Produtos.php');
                header("Refresh: 60; url=produtos.php");
            }
        }
        else
        {
            //include ('./features/Lista_Busca_Produtos.php');
            echo "<h4 class='center'>Nada encontrado </h4><br>";
            echo "<h5 class='center'>Essa página irá Atualizar automaticamente em 60 segundos... </h5><br>";
            include ('./features/Botao_Atualizar_Lista_Produtos.php');
            header("Refresh: 60; url=produtos.php");

        }
    }
    elseif (isset($_POST['btnnovo']))
    {
        include ('./features/Formulario_Novo_Produto.php');
    }
    elseif (isset($_POST['btneditar']))
    {
        //include ('./features//Lista_Busca_Produtos.php');
        if (isset($_GET['id']))
        {
            $id = $_GET['id'];
            

            $linhas = DB::query('SELECT * FROM tb_produtos WHERE produtoid=:produtoid', array(':produtoid'=>$id));

            foreach ($linhas as $linha)
            {
                $produtoId = $linha['produtoid'];
                $produtoCodigo = $linha['produtocodigo'];
                $produtoNome = $linha['produtonome'];
                $produtoDescricao = $linha['produtodescricao'];
                $produtoPreco = $linha['produtopreco'];
                $produtoDataEntrada = $linha['produtodataentrada'];
                $produtoDataSaida = $linha['produtodatasaida'];
                $produtoStatus = $linha['produtostatus'];

                /*
                echo $produtoId . "<br>";
                echo $produtoCodigo . "<br>";
                echo $produtoNome . "<br>";
                echo $produtoDescricao . "<br>";
                echo $produtoPreco . "<br>";
                echo $produtoDataEntrada . "<br>";
                echo $produtoDataSaida . "<br>";
                echo $produtoStatus;
                */
                //echo $linhas[0];
                //echo $produtoId;
                //die;

                include ('./features/Formulario_Editar_Produto.php');

            }
        }
        
        //echo "gfhgfgfhfh";
    }
    else
    {
        include ('./features/Lista_Busca_Produtos.php');

    }
?>
