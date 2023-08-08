<?php 
/*
    -Para unir arrays utilizamos a função array_merge();
    -Ela aceita argumentos indeterminados, isto é, posso colocar quantos arrays eu precisar como argumentos;
*/
$arr1 = range(1,10);
$arr2 = range('a','z');
$arr3 = ['Ithalo', true, 'Hemilly', 7, [1,2]];

$merge = array_merge($arr1,$arr2,$arr3);#até se eu colocar um arr hard coded aqui ele aceita ex:[1,2].
print_r($merge);
echo '<br>';
?>