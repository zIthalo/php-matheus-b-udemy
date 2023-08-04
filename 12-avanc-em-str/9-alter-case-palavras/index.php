<?php 
/*
    PODEMOS ALTERAR CASES DE PALAVRAS COM ucfirst e ucwords

    ucfirst - primeira letra da str em maiúsculas;

    ucwords - primeira letra de cada palavra em maiúsculas;


*/

$str = "my name is Seth";
echo 'Mudando o case da 1º letra da str: <br>';
echo ucfirst($str) . '<br>';
echo 'Mudando o case das 1ºs letras de cada palavra: <br>';
echo ucwords($str) . '<br>';


?>