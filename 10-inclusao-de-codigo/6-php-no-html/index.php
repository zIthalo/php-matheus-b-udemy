<?php 
/*
    -COMO ABORDADO ANTERIORMENTE NAS SEÇÕES, ESTA É UMA DAS PRINCIPAIS FUNCIONALIDADES DO PHP;
    -PODEMOS INSERIR CÓDIGO DINÂMICO ENTRE NOSSAS TAGS;
    -AS EXTENSÕES PARA ESTE TIPO DE ARQUIVO PODE SER DE .php e .phtml;
    -EX:
    <h1> <?=$titulo;?> </h1>;
*/
    include_once "backend.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php no html</title>
    <style>
        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: goldenrod;
            
        }
    </style>
</head>
<body>
    <h1>Seja bem-vindo ao nosso site</h1>
    <p> <?=$nome;?>, veja as nossas ofertas.</p>
        <h2>Veja alguns dos nossos principais produtos:</h2>
        <ul>
             <?php  foreach ($produtos as $produto): ?> <!--já que eu incluí o meu arquivo backend.php eu posso rodar um for each com o array que existe lá no meu arquivo. Neste caso eu usei para criar uma lista não ordenada de html -->
                <li><?=$produto;?></li> <!--aqui serão criadas as listas de acordo com a quantidade de índices do meu array já que no caso meu array possui 3 índices aqui terão 3 listas-->
            <?php endforeach;?>    <!--Para parar meu for each eu abri a tag php e coloquei o endforeach; para pará-lo.-->
        </ul>
    </body>
    </html>
        
    
    
    <!--<.?php foreach ($produtos as $produto) {
        echo "<p>Produto: $produto</p>";
        if ($produto == 'lancha') {
            echo "Nossos barcos estão em promoção!";
        }
    }
    ?.>--> 