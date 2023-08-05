<?php 
/*
    -Adicionar dados a um array não é nenhum mistério, veja os exs
        $arr = [1,2,3];
        $arr2[1] = 'teste';
        $arr['carro'] = celta; #arr associativo;

*/

    $arr['carro'] = 'celta';
    #para criar o próximo índice com array assoc não tem complicação veja:
    $arr['avião'] = 'F-15';

    print_r($arr);

    echo '<br>';
    
    $arr2 = [1,2,3];
    print_r($arr2);
    echo '<br>';
    
    $arr3[0] = 'ithalo';
    print_r($arr3);
    echo '<br>';
    
    $arr3[1] = 15;
    print_r($arr3);
    echo '<br>';
    #também posso fazer a atribuição somando
    $arr3[1] += 15;
    print_r($arr3);
    echo '<br>';
    #eu até posso fazer $arr3[5] = 3; mas como eu não criei índices anteriores isto não é indicado a se fazer;
    

    ?>