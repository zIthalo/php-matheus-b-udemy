<?php 
/*
    -Crie um arr multidimensional que tenha 3 arrays que tem 4 elementos cada;
    -Imprima todos os elementos de cada array;
    -Imprima também quando estiver mudando de array-
*/

    $arr = [
        [1,2,3,4],
        [5,6,7,8],
        [9,10,11,12]
    ];
    #loop no array externo
    for ($i=0; $i < count($arr); $i++) { 
        #print no array externo
        echo "Imprimindo o array externo: ". ($i+1);
        #imprimindo o array interno
       for ($j=0; $j < count($arr[0]); $j++) { 
        echo $arr[$i][$j] . '<br>';
       }
    }

    #Minha solução - obs: deu certo; mas preferi deixar aperfeiçoada com a solução do professor, que diga-se de passagem, não foi tão diferente assim da minha solução, só foi mudada a frase do 1º echo ;
    // $arr = [
    //     [1,2,3,4],
    //     [5,6,7,8],
    //     [9,10,11,12]
    // ];
    // for ($i=0; $i < count($arr); $i++) { 
    //     echo "Mudando de array <br>";
    //    for ($j=0; $j < count($arr[0]); $j++) { 
    //     echo $arr[$i][$j] . '<br>';
    //    }
    // }
?>