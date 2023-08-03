<?php 
/*
    -strlen($str) SERVE PARA VER A QUANTIDADE DE ÍNDICES DE UMA STR 
*/

    $nome = 'Ithalo';
    $nome2 ='Willian';
    echo strlen($nome) . '<br>';
    echo strlen($nome2) . '<br>';

    #salvando em vars

    $len = strlen($nome);
    $len1 = strlen($nome2);

    #comparando

    if ($len > $len1) {
        echo 'a str 1 é maior que a str 2 <br>';
    } else {
        echo 'a str 2 é maior que a str 1<br>';
    }


?>