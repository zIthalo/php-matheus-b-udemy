<?php 
/*
    -Com a função array_sum($arr) é possível somar todos os índices de um array;
    -Ela nos retorna o valor da soma de todos os índices do arr que foi passado como parâmetro;
*/

    $arr = range(1,10); #se eu declarasse este array sem ser por meio de range e incluísse em um dos índices uma str, o array_sum() iria ignorar a str e somaria só os números;
    print_r(array_sum($arr));
    echo '<br>';
?>