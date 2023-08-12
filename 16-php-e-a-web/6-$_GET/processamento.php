<?php 

    // print_r($_GET);
    // Saída: Array ( [nome] => Ithalo Willian );
    // Vou conseguir chegar nesta página, quando eu enviar meu form. A action de um form leva o usuário para uma próxima página
    // $nome = $_GET['nome']; # Este $_GET['nome'] se refere ao name='nome' que está lá no meu input html. Traduzindo seria, pegue o que foi digitado no input de nome='nome' lá na outra página;
    // $idade = $_GET['idade'];
    
    // Este if serve para evitar o erro que foi mencionado na linha 26
    if (isset($_GET['nome'])) {
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
    }else{
        $nome = 'Padrão';
        $idade = 'Padrão';
    }






    // http://localhost/php-matheus-b-udemy/16-php-e-a-web/6-teste-forms-get/processamento.php?nome=Ithalo+Willian
    # tudo que vem depois dessa ?      ↑ é um parâmetro
    # se eu apagar esta parte de trás após a ? dará um erro tipo warning
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    <header>
        <h1>O seu nome é <?= $nome. '<br>'; ?> Você tem <?=$idade; ?> Anos</h1>
    </header>
</body>
</html>