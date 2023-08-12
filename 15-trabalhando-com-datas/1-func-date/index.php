<?php 
/*
    -A função date() recebe um parâmetro, que é o formato da data, e este é o primeiro parâmetro da mesma;
    -A resposta será data atual;
    -Ex:
        date("d/m/y"); //day | month | year;
*/
    // Tudo em minúsculo a saída será só de números ex: 14/10/23 com o ano abreviado
    $d= date('d/m/y');
    // Tudo em maiúsculo sairá a abreviação do dia e ano ex: Fri/Nov/2023
    $D= date('D/M/Y'); #y maiúsculo não abreviará o ano
    // Posso organizar a data de outras formas ex:
    $D2 = date('d/M/Y'); # o 1º será numérico e o mês será por extenso abreviado;
    $d2 = date('d - M - Y');# agora cada valor será separado por - ao invés de /
    $d3 = date('l - M - Y');# com l mostraremos o nome do dia completo em inglês ex: Sunday
    $d4 = date('l - F - Y');# com F a gente mostra o nome do mês completo ex February
    echo $d .'<br>';
    echo $d2 .'<br>';
    echo $D .'<br>';
    echo $D2 .'<br>';
    echo $d3 .'<br>';
    echo $d4 .'<br>';
?>