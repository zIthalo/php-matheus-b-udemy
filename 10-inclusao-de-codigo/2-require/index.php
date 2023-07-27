<h2>Testando</h2>
<?php 
/*
 -COM O REQUIRE INSERIMOS UM ARQUIVO DE PHP, OU UM HTML EM OUTRO;
 -PODENDO ASSIM UTILIZAR TUDO QUE ESTÁ DECLARADO NO ARQUIVO INCLUÍDO;
 -O REQUIRE GERA ERRO FATAL SE O ARQUIVO NÃO EXISTIR, PARANDO O SCRIPT;
 -EXEMPLO:
 rquire "arquivo.ext";

*/
    // include "teste.php";
    //require "teste.php";
    #A DIFERENÇA É QUE SE EU COLOCAR O INCLUDE, TODO ESSE CÓDIGO ABAIXO VAI RODAR MESMO QUE TENHA UM ERRO, MAS SE EU UTILIZAR O REQUIRE TUDO E TIVER ALGUM ERRO, NADA ABAIXO VAI RODAR

    require "teste.php"; //neste require eu não estou aproveitando um comando php eu estou reaproveitando um template html

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require php</title>
    <style>
        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: goldenrod;
            
        }
    </style>
</head>
<body>
    <p>Arquivo do include</p>

    <?php 
        require "arquivos/funcao.php";
        
    ?>
</body>
</html>

