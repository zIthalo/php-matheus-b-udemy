<?php 
/*
-Implemente uma função chamada ordenarNumeros() que recebe um array de números como parâmetro.

-A função deve ordenar os números em ordem crescente.

-Retorne o array de números ordenado.

-Utilize a função sort para ordenar o array em PHP.
*/
function ordenarNumeros($arr){
     sort($arr);
     return $arr;
}

$arr = [12,11,15,22,44,9,6,7];
print_r(ordenarNumeros($arr));
?>