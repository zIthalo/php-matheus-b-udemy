<?php 
/*
    -podemos criar um array rapidamente atribuindo a função range() a uma var:
    -$var = range(1,10); cria um array de um a 10
*/

    $var = range(1,10);
    print_r($var);
    echo '<br>';
    $arr = range('a', 'z');# posso criar também um arr de A a Z ou de Z a A;
    print_r($arr);
    echo '<br>';
    echo implode(', ', $arr);
    echo '<br>';
    $arr2 = range(1, 1000, 100);#este range aqui significa que eu quero cirar um array de 1 a mil só que pulando de 100 em 100;
    print_r($arr2);
    echo '<br>';
?>