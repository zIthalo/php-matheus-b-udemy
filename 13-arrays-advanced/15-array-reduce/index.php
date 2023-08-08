<?php 
/*
    -A função array_reduce() tem como objetivo reduzir o array em apenas um valor;
    -Podemos passar uma segunda função como parâmetro, para algum processo ser executado;
    array_reduce($arr, 'func'); 1º sempre será o arr e o 2º pode ser uma func declarada como str;
*/
#como funcionou o array_reduce() com a function soma()? Ele pega o primeiro índice para o parâmetro $a e o segundo índice para o parâmetro $b, efetua a soma dos dois e o resultado da soma passa a ser o novo valor do parâmetro $a, depois pega e soma com o próximo número e o resultado dessa soma será o novo valor do parâmetro $a e assim por diante até que some todos os índices e finalize;
 $arr = range(1,20);
 function soma($a =0, $b = 0){
    return $a + $b;
 }

 $resultado = array_reduce($arr, "soma"); #quando eu for declarar a função eu tenho que declará-la como str;

 echo "$resultado <br>";# no caso ele retornará somente o resultado da soma dos índices do array, ou seja, transformou um array em um número int
?>