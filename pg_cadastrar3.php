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
    <input type="number" step="0.01" min="0.00" name="preco_digitado"><BR></BR>
    
        <label for="">Categoria: </label><br>
    <select name="categoria_escolhida" id="">
        <option value="">Selecione</option>
        <option value="Cesta básica">Cesta básica</option>
        <option value="Limpeza">Limpeza</option>
        <option value="Enlatados">Enlatados</option>
        <option value="Molhos">Molhos</option>
        <option value="Temperos">Temperos</option>
    </select>
        <label for="">Imagem: </label><br>
    <input type="text" name="imagem_adcionada"><BR></BR>

    <button type="submit">Cadastrar produto</button>
    </form>    
</body>
</html>