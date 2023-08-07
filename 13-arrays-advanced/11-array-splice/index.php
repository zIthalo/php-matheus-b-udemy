<?php 
/*
    -Podemos remover elementos de um array com a função array_splice();
    -Passamos como parâmetro o array, índice inicial e quantos elementos queremos remover;
    -Ex: array_splice($arr,2,1) => Apartir do índice 2, remove 1 elemento;
*/
//RESGATAR ELEMENTOS DE UM ARRAY;
//REMOVER ELEMENTOS DE UM ARRAY;

$arr = range(1,6);
print_r($arr);
#saída: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )
echo '<br>';
$removido = array_splice($arr, 2, 1); #legenda: apartir do índice 2 retire um elemento. Isso só irá retirar o índice 2
print_r($removido);
#saída: Array ( [0] => 3 )
echo '<br>';
print_r($arr);
#Saída: Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 5 [4] => 6 )
echo '<br>';
$removidos = array_splice($arr, 2, 2);#Legenda: Apartir do índice 2 remova 2 elementos. Só irá retirar o índice 2 e o próximo após ele;
print_r($removidos);
#Saída: Array ( [0] => 4 [1] => 5 )
echo '<br>';
print_r($arr);
#Saída: Array ( [0] => 1 [1] => 2 [2] => 6 )
echo '<br>';

#Se eu fizer um array_splice($arr, 1) e não declarar o último argumento, ele só irá remover do índice 1 até o fim do array;

#Eu também posso trabalhar com array_splice($arr, 2, -1), usando valores negativos
?>