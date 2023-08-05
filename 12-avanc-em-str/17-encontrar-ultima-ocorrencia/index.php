<?php 

/*
    -Com strrpos(agora tem 2 r's) podemos encontrar o último índice de uma plavra dentro de uma str;
    -se retornar algum número é porque a palavra existe.
*/

    $nome = 'Carlos fontes agua viva fontes';
    echo 'Último índice da palavra fontes: ';
    echo strrpos($nome, 'fontes');
    echo '<br>';

    echo 'Primeiro índice da palavra fontes: ';
    echo strpos($nome, 'fontes');
    echo '<br>';

    #resgatando as palavras, com substring() mas agora utilizando o strpos();

    $p = substr($nome, strpos($nome, 'fontes'), 6);

    echo $p;


?>