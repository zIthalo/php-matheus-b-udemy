<?php 
/*
    -Crie um array com os valores: [batata, maçã, pêra, feijão, arroz];
    -Remova pêra e feijão;
*/

$arr = ['batata', 'maçã', 'pêra', 'feijão', 'arroz'];
print_r($arr);
echo '<br>';
$removidos = array_splice($arr, 2,2);
print_r($removidos);
echo '<br>';
print_r($arr);
echo '<br>';

$arr2 = ['batata', 'maçã', 'pêra', 'feijão', 'arroz'];
array_splice($arr2, 2,2);#aqui eu só removo e não salvo nada em nenhuma $var;
print_r($arr2);
echo '<br>';



?>