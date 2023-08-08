<?php 
/*
    -Crie um array associativo com valor de nomes, e valores com pontuação;
    -Ordene os dados do maior para o menor;
    -Exiba uma lista, simulando um ranking, em HTML;
*/
    $ranking = [
        'juca' => 99,
        'carlos' => 120,
        'priscila' => 119,
        'gabriela' => 121,
        'ithalo' => 150
    ];
    arsort($ranking);
    print_r($ranking);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex007</title>
    <style>
        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: gold;
        }
        table{
            border: 1px black solid;
        }
        th{
            border: 1px black solid;
            padding: 5px;
        }
        td{
            border: 1px black solid;
            padding: 5px;
        }

    </style>
</head>
<body>
    <table>
        <tr>
            <th>Participante</th>
            <th>Pontuação</th>
        </tr>
        <?php foreach ($ranking as $pessoa => $pontuacao): ?>
        <tr>
            <td><?=$pessoa; ?></td>
            <td><?=$pontuacao; ?></td>
        </tr>
        <?php endforeach;?>
    </table>

    <ol>
        <?php foreach ($ranking as $key => $value):?>
            <li><strong>Nome:</strong> <?=$key?> <strong>Pontuação:</strong> <?=$value?></li>
        <?php endforeach;?>
    </ol>
</body>
</html>