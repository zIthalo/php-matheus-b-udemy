<?php 
/*
    -Com a função array_reverse($arr) podemos obter o arr ao inverso;
    -Passamos apenas o array como argumento;
    -O retorno será um array invertido do original;
*/

    $arr = range('a','z');
    print_r($arr);
    echo '<br>';
    print_r(array_reverse($arr));/*Ele não altera a estruturado array, ou seja, se eu quiser salvar a nova forma do meu array tenho que salvar em uma $var; */
    echo '<br>';
?>