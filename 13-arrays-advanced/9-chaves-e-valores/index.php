<?php 
/*
    -com a função array_keys() recebemos um array apenas com as chaves de um array;

    -com a função array_values() recebemos um array com apenas os valores de um array;
*/

$carro =[
    'marca' => 'Bulgatti',
    'motor' => '3.4',
    'teto-solar' => true,
    'cambio' => 'manual',
    'poprtas' => 4
];
#existem alguns tipos de arrays que eu não vou saber quais são as chaves deles, por exemplo, quando vierem de um banco de dados, para descobrir quais são as chaves do mesmo eu tenho que fazer o seguinte:
$chaves = array_keys($carro);

print_r($chaves);
//Saída: Array ( [0] => marca [1] => motor [2] => teto-solar [3] => cambio [4] => poprtas ) ;
#só irá me mostrar os nomes dos índices, ou seja, as chaves.
echo '<br>';

$valores = array_values($carro);
print_r($valores);
//Saída: Array ( [0] => Bulgatti [1] => 3.4 [2] => 1 [3] => manual [4] => 4 ); 
//Já com array_values, só irá  me mostrar os valores das chaves.
#com o array_values eu acabo transformando o meu array associativo em um array comum com índices e com isso eu posso passar um loop nele para apresentar os valores;
echo '<br>';


?>