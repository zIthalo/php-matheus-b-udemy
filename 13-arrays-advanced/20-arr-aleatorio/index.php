<?php 
/*
    -Com a função shuffle($arr) podemos reorganizar uma estrutura de um array;
    -Passamos apenas o array como parâmetro;
    -Temos um array retornado de forma aleatória;
*/
$arr1 = range(1,10);
$arr2 = range('a','z');
$arr3 = ['Ithalo', true, 'Hemilly', 7, [1,2]];
shuffle($arr1);//Os shuffles funcionam como os sorts, eles, de fato, alteram as estruturas dos arrays e não podem ser salvos em vars. As funções shuffle() só aceitam um parâmetro
shuffle($arr2);
shuffle($arr3);
print_r($arr1);
echo '<br>';
print_r($arr2);
echo '<br>';
print_r($arr3);
echo '<br>';
?>