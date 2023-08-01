<?php 

/*  DESCRIÇÃO

    -O QUE É DEPURAR/DEBUG? -É ENCONTRAR ALGUM PROBLEMA NO CÓDIGO;
    -UTILIZAMOS DUAS FUNÇÕES PARA VERIFICAR DADOS FORMATADOS:
    prnt_r() e var_dump();
    -AS DUAS APRESENTAM OS DADOS DE FORMA SEMELHANTE
    -PORÉM A var_dump() TEM UM FORMATO MAIS FÁCIL PARA HUMANOS LEREM;
*/

$arr =[
    'teste',
    1.44,
    10,
    true,
    [1,23]
];

print_r($arr);
echo '<br>';
echo '<br>';
var_dump($arr);
echo '<br>';


?>