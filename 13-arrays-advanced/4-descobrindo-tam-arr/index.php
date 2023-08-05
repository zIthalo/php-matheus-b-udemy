<?php 
/*
    -podemos descobrir a quantidade de índices de um array usando a função count($arr);
*/

$arr = range('a','z');
echo count($arr) . "<br>";

#com arrays associativos;

$arr2 = [
    'carro' => 'Peugeot 208',
    'bairro' => 'Caetés Velho',
    'viajar' => 'EUA'
];

echo count($arr2) . '<br>';


?>