<?php 
//criar um array associativo com características de uma pessoa, depois fazer um if checando se ela é maior de idade e mostrar alguma mensagem na tela

$pessoa = [
    'nome' => 'juca',
    'idade' => 18,


];
$nome = $pessoa['nome'];

if ($pessoa['idade'] >= 18) {
    echo "<h2> $nome É de maior.</h2>";
}else {
    echo "<h2> $nome É de menor.</h2>";
}

?>