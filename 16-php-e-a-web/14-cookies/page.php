<?php 
    //Mesmo mudando de página meu cookie fica salvo
    if (isset($_COOKIE['nome'])) {
        $nome = $_COOKIE['nome'];
    }
    //Para sanar os problemas dos cookies temos as $_SESSION
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
    <h1>Página!</h1>
    <?php if ($nome != ""):?>
    
        <p>Seja bem vindo(a), <?=$nome;?>!</p>
    
    <?php endif;?>
</body>
</html>