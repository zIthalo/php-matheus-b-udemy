<?php 
/*
    - Arrays multidimensionais não têm mistério, eles são arrays dentro de arrays entenda a sintaxe:
    $arr =[[1,2,3,4], [5,6,7,8]];
    ou seja, eu tenho um array que no índice 0 tem outro array com 4 índices, e no índice 1 tem outro array com mais 4 índices:
*/

$arr = [['ithalo', 'willian'],['maximino', 'da', 'silva']];
echo $arr[0][0] . '<br>'; #imprima meu array no índice 0 que tem outro array, imprima o conteúdo do índice 0;
//saída: ithalo;
echo $arr[1][2] . '<br>'; #imprima meu array no índice 1 que tem outro array, imprima o conteúdo do índice 2;

for ($i=0; $i < count($arr); $i++) { 
    for ($j=0; $j < count($arr[0]); $j++) { 
        echo $arr[$i][$j] . '<br>';   
    }
}
?>