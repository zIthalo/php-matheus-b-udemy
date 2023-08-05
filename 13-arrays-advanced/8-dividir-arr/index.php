<?php 
/*
    -Podemos dividir um array grande em diversos arrays de número de elementos iguais;
    -Vamos utilizar a função array_chunk();
    -Passamos o array como argumento e também o número de elementos que cada array deve ter;
*/
$arr = range(1,20);
print_r(array_chunk($arr, 4)); #quero que este array se torne multidimensional com 4 índices para cada elemento;
echo '<br>';
echo '<br>';

#O que esta função faz é transformar um array unidimensional para um array multidimensional;
#posso salvar esse array multi dimensional em uma $var;
$arrays = array_chunk($arr, 10);#dividi meu array em dois, dando 10 elementos para cada;
print_r($arrays);
echo '<br>';
echo '<br>';
#eu ainda posso imprimir um índice específico do meu array ex:
print_r($arrays[1]);
echo '<br>';


?>