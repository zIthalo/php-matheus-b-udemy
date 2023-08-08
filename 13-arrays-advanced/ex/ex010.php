<?php 
/*
-Escreva uma função chamada encontrarPares que recebe um array de números inteiros como parâmetro.

-A função deve retornar um novo array contendo apenas os números pares presentes no array original.

-Considere que o array sempre terá pelo menos um elemento.
Dica: Utilize a função array_filter do PHP em conjunto com uma função anônima para filtrar os números pares. #Não fiz assim.
*/
function encontrarPares($arr){
    $par = [];
    for ($i=0; $i < count($arr); $i++) { 
        if ($arr[$i]%2 == 0) {
            $par[] = $arr[$i]; #para preencher índices de um array ($par[]) com os índices pares de outro array ($arr[$i]) no for, eu não posso esquecer de colocar os colchetes no $arr;
        }
    }
    return $par;
}

$arr = [3,4,6,7,10,11,16];

print_r(encontrarPares($arr));
echo '<br>';
?>