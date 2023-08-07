<?php 
/*
    -Com a função extract podemos criar vars rapidamente de arrays associativos
    -O nome da chave será o nome da var;
    -Se houver uma var já criada com o nome da chave ela será sobrescrita;
*/

    $arr = [
        'nome' => 'Ithalo',
        'esposa' => 'Hemilly',
        'cidade' => 'Abreu e Lima'
    ];#cria-se o array associativo
    extract($arr);#passa pela func extract();
    echo "Meu nome é $nome o nome da minha esposa é $esposa moramos em $cidade <br>";#todas as chaves deste array agora serão variáveis e podemos chama-las com echo;

?>