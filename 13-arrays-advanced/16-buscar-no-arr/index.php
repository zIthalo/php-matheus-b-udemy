<?php 
/*
    -A func in_array() verifica se um item  passado por parâmetro está no array;
    -O retorno é true se encontrar o item e false se não o encontrar;
    -Vamos passar dois argumentos para a função, exemplo: in_array("item", $arr);

*/

    $pessoa = ['Ithalo', 26];

    $verificador = in_array('Ithalo', $pessoa);

    if ($verificador === true) {
        echo 'true <br>';
    } else {
        echo 'false <br>';
    }


    $pessoa2 = [
        'nome' => 'Ithalo', 
        'idade' => 26
    ];

    $verificador2 = in_array('Ithalo', $pessoa2);
    #Nota o in array serve apenas para descobrir o valor e não a chave de um arr assoc

    if ($verificador2 === true) {
        echo 'true arr assoc<br>';
    } else {
        echo 'false arr assoc<br>';
    }
?>