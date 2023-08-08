<?php 
/*
    -Podemos verificar a diferença entre 2 ou mais arrays com PHP;
    -A função que vamos utilizar é a array_diff();
    -Ela também, assim como array_merge(), aceita um número indeterminado de arrays como argumento;
*/
$arr1 = [1, 5 ,6];
$arr2 = [3, 5, 7];
print_r(array_diff($arr1, $arr2));#é óbivio, mas precisa ser dito. Aqui eu estou comparando a diferença entre a arr1 com a arr2, mas eu posso ver as diferenças da arr2, para arr1, que já é outra verificação
#Saída: Array ( [0] => 1 [2] => 6 )

echo '<br>';
print_r(array_diff($arr2, $arr1));
#Saída: Array ( [0] => 3 [2] => 7 );

#perceba que existe uma diferença para cada saída de cada verificação que fiz;
#o array_diff() responde uma pergunta: Qual é a diferença entre as arr1 e arr2? e vice versa.

echo '<br>';
?>