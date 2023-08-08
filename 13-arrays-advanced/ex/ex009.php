<?php 
/*
Escreva uma função chamada maiorElemento que recebe um array de números como parâmetro.

A função deve retornar o maior elemento presente no array.

Considere que o array sempre terá pelo menos um elemento.

Dica: Utilize a função max do PHP para encontrar o maior elemento do array.
*/
function maiorElemento($arr){
    return max($arr);# a função max retorna o maior valor de um índice de um array;
}
$valores = [1,3,5,10];
print_r(maiorElemento($valores));
echo '<br>';

#criando minha própira função max() para entender o funcionamento;
function valorMaximo($values){
    if (empty($values)) {
        return null;
    }
    $maxValue = $values[0];
    foreach ($values as $value) {
        if ($value > $maxValue) {
            $maxValue = $value;
        }
    }
    return $maxValue;
}

$numeros = [5,8,22,55];
print_r(valorMaximo($numeros));
?>