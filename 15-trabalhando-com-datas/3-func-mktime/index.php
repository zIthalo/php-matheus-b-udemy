<?php 
/*
    -A função mrtime recebe em seus parâmetros hora, minuto, segundo, mês, dia, ano;
    -Assim podemos criar uma data a partir desta informação;
    -Exemplo 
    $date = mktime(01, 18, 00, 03, 12, 2000);
    echo date('d/m/y', $date);

    mktime = make time, ou seja, o php cria uma data. 

*/
    $date = mktime(01, 18, 00, 03, 04, 1997);
    echo date('D/M/Y', $date) . '<br>';# Assim como eu criei esta data passada que é o ano do meu nascimenteo também posso criar uma data futura
?>