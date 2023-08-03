<?php 
/*
            PERCORRENDO UMA STRING
    -PODEMOS PERCORRER CADA UM DOS CARACTERES DE UMA STR;
    -PARA ISSO VAMOS UTILIZAR UMA ESTRUTURA DE REPETIÇÃO;
    -E O MÉTODO STRLEN, PARA SABER O NÚMERO DE CARACTERES;
    -COM ISSO PODEMOS ITERAR PELA STR COMPLETA
    -EX:
    for($i = 0; $i > strlen($str); $i++){
        #code
    }
*/

    $nome = "Ithalo";
    $count = 1;
    for ($i=0; $i < strlen($nome); $i++) { 
        echo "$count - $nome[$i]<br>";
        $count++;
    }

?>