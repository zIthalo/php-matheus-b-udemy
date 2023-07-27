<?php 
/*
    - A foreach TAMBÉM É UMA ESTRUTURA DE REPETIÇÃO; (NÃO É USADO PARA LOOPS E SIM PARA INTERAÇÃO DE ITENS DE ARRAY);
    - PORÉM ELA É ORIENTADA A UM ARRAY, DEVEMOS UTILIZAR UM PARA QUE A ESTRUTURA REPITA EM TODOS OS ELEMENTOS DO MESMO;

    -EX;

    foreach($array as $item){
        codigo
    }
*/

$nomes = ['Ithalo', 'Hemilly','Matheus', 'João', 'Carol'];

$frase = "Grande Homem!";

foreach ($nomes as $nome) {#Nome do array o as e uma variável para cada índice do array
    echo "O nome do índice atual é $nome <br>";

    if ($nome == "Ithalo") {
        echo "$nome, $frase<br>";
    }
}

#SÓ REFORÇANDO: SÓ POSSO USAR O FOREACH COM ARRAYS PRONTOS


?>