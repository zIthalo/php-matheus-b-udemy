<?php 
/*
    -Com a função compact podemos criar um array a partir de vars;
    -Passamos para a função o nome das vars em strs;
    -E então um novo array é criado, podemos atribuir a uma var;

    -O compact() é como se fosse o inverso do extract();
    -O extract() transforma um arr assoc em várias variáveis
    -O compact() transforma várias vars em um array assoc;
*/
    $nome = 'Ithalo';#vars que irei transformar em arras assoc
    $idade = 26;
    $esposa = 'Hemilly';

    $arr = compact('nome', 'idade', 'esposa');#chamando cada var pelo nome mas sendo declaradas como strs. Se eu colocar algum valor que não existe eu terei um erro warning

    print_r($arr); #mostrando meu novo array
    #Saída: Array ( [nome] => Ithalo [idade] => 26 [esposa] => Hemilly )
    echo '<br>';


?>