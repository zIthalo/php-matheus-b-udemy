<?php 
/*
    - Os cookies são strings que contém informações;
 
    - A função para adicionar um cookie é setcookie;
 
    - A função deve ser chamada antes do corpo da página, pois envia dados como header(cabeçalho);
 
    - O cookie leva dados como: nome, valor e data de expiração;
 
    - Podemos acessar os cookies de volta com $_COOKIE;
    (Está ficando ruim de trabalhar com cookies por causa da LGPD)
*/
    setcookie("nome", "Ithalo", time() + 3600);// 3600s dá uma hora e time() significa tempo atual

    // Para encontrar os cookies enviados vou no devtools-application-lado esquerdo vou em-cookies e lá os vejo

    // Para exibir dinamicamente os cookies ↓
    if (isset($_COOKIE['nome'])) {
        $nome = $_COOKIE['nome'];
    }
    # Com isso eu retorno um array com o nome do cookie
    # print_r($_COOKIE);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIES</title>
    <style>
        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: goldenrod;
        }
    </style>
</head>
<body>
    <h1>Olá, mundo!</h1>
    <?php if ($nome != ""):?>
    
        <p>Seja bem vindo(a), <?=$nome;?>!</p>
    
    <?php endif;?>
</body>
</html>