<?php
include "verificar_logado.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Cadastrar novo produto</h1>
    <form action="cadastrar.php" method="post">
        <label for="">Nome do produto: </label><br>
    <input type="text" name="nome_digitado"><BR></BR>
    
        <label for="">Preço: </label><br>
    <input type="number" step="0.01" name="preco_digitado"><BR></BR>
    
        <label for="">Categoria: </label><br>
    <select name="categoria_escolhida" id="">
        <option value="">Selecione</option>
    <?php
        include "conexao.php";
        $sql="SELECT categoria From tb_produtos group by categoria;";
        $consultar = $pdo->prepare($sql);
        try{
            $consultar->execute();
            $resultado = $consultar->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $item){
                $categoria = $item['categoria'];
                echo " <option value=$categoria>$categoria</option>"; 
            }
        }catch(PDOException $erro){
            echo "falha ao consultar as categorias" . $erro->getMessage();
        }
    ?>
    </select><br><br>
        
        <label for="">estoque: </label><br>
    <input type="number" name="estoque_digitado"><BR></BR>

        <label for="">Imagem: </label><br>
    <input type="text" name="imagem_adcionada"><BR></BR>

    <button type="submit">Cadastrar produto</button>
    </form>    
</body>
</html>