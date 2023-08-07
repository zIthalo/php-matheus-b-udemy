<?php 
/*
    -crie um array associativo com nomes e idades;
    -imprima estes dados em uma tabela html
    -Dica: utilize as tags do elemento table;
*/

$pessoas = [
    "nome" => "Ithalo",
    'idade' => 26,
    'nome2' => 'Hemilly',
    'idade2' => 25
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex006</title>
</head>
<body>
    <ul>
        <?php foreach($pessoas as $pessoa => $value): ?>
            <?php if ($value == 'casado' && $value === true) {
                $value =(string) 'true';
            }?>
        <li><?=$pessoa. ': '. $value;?></li>
        <?php endforeach;?>
    </ul>
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
            
            <?php foreach ($pessoas as $nome => $idade): ?>
            <tr>
                <td><?=$nome;?></td>
                <td><?=$idade;?></td>
            </tr>
            <?php endforeach;?>
    </table>
</body>
</html>