<?php 
/*
    -podemos adicionar um valor no fim do arr sem declarar o índice:
    $arr[] = 5; #desta forma estou criando um índice com o valor 5 no final do meu $arr;
*/
    $arr = [1,2,3,4];
    print_r($arr);
    echo '<br>';
    $arr[] = 5;
    print_r($arr);
    echo '<br>';
    array_push($arr, 6);#com array_push eu também consigo inserir um valor no final
    print_r($arr);
    echo '<br>';
    #adicionando itens no fim com loop;
    $arr2= [];
    for ($i=0; $i < 5 ; $i++) { 
        $arr2[] = $i;
        echo "índice $i: $arr[$i]<br>";
    }
    print_r($arr2);
    echo '<br>';

    $arr3 = [];

    for ($i=0; $i < 5 ; $i++) { 
        array_push($arr3, $i);
        echo "Índice $i: $arr3[$i] <br>";
    }
    print_r($arr3);

?>