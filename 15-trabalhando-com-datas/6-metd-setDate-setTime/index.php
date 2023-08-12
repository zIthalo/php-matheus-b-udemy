<?php 
/*
    -Temos mais dois métodos interessantes em DateTime: setDate() e setTime();
    -setDate() = Recebe ano, mês e dia, alterando completamente a data
    -setTime() = Recebe hora, minuto e segundo, alterando o tempo da data;
*/

    $data = new DateTime();
    $data->setDate(2020,12,25);# Alterei a data
    // imprimi a data ↓
    echo $data->format('d/m/y') . '<br>';
    #alterando o tempo da data
    $data->setTime(14,22,30);

    #para imprimir direto um objeto com date eu posso utilizar o print r mas esqueço as vezes kk
    print_r($data);

?>