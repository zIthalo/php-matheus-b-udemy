<?php 
/*
Escreva uma função chamada somaElementos que recebe um array de números como parâmetro.

A função deve retornar a soma de todos os elementos do array.

Considere que o array sempre terá pelo menos um elemento.

Dica: Utilize a função array_sum do PHP para calcular a soma dos elementos do array.

*/
    function somaElementos($arr){
        return array_sum($arr);
    }
    $arr = range(1,10);
    print_r(somaElementos($arr));

?>