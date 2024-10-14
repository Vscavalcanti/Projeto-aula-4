<?php

use function PHPSTORM_META\sql_injection_subst;

include "verificar_logado.php";
if(isset($_GET['inserir'])){
    echo"
    <script>
        alert('Cadastrado com sucesso');
    </script>
    ";
}
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Gerenciar produtos</h1>
    <form action="pg_gerenciar.php" method="get">
        <input type="text" name="produto_pesquisado" 
        placeholder="Digite o nome do produto">
        <button type="submit">Pesquisar</button>
    </form>

    <div id="conteudo">
        <?php 
        include "conexao.php";
        $sql = "SELECT * FROM tb_produtos";
        if(isset($_GET['produto_pesquisado'])){
            $pesquisa = $_GET['produto_pesquisado'];
            $sql = "SELECT * FROM tb_produtos 
            WHERE nome_produto LIKE '%$pesquisa%'";
        }
        $consultar = $pdo->prepare($sql);
        try{
            $consultar->execute();
            $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultados as $item){
                $id=$item['id_produto'];
                $nome=$item['nome_produto'];
                $valor=$item['preco'];
                $qtd=$item['estoque'];
                $cat=$item['categoria'];
                $foto= $item['imagem'];

                echo"<div class='cartoes'>
                    <img src='$foto' class='fotos'><br>
                    <span> R$ $valor</span><br>
                    <span> R$ $nome</span><br>
                    <span>Categoria: $cat</span><br>
                    <span> QTD disponivel: $qtd</span><br>
                    <span> Cod nº: $id</span><br>
                </div>";

            };
        }catch(PDOException $erro){
            echo "Falha ao consultar produtos". $erro->getMessage();
        }
        ?>
    </div>
</body>
</html>