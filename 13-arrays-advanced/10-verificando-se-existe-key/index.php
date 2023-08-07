<?php 
/*
    -Com a função array_key_exists podemos verificar se  há um valor em uma respectiva key de um array;
    
    -Podemos fazer essa checagem em um if;

    -Ex: array_key_exists("nome", $arr);
    
    -Outra função que podemos utilizar para este fim é  a isset();
*/
$arr = [
    #↓↓chave  ↓↓valor 
    'nome' => 'Ithalo', 
    'idade' => 29
];
#estas verificações ervem para verificar se determinada chave no array existe;
if (array_key_exists('nome', $arr)) {
    echo 'Sim, esta chave existe. <br>';
}else {
    echo 'Não, esta chave não existe. <br>';
}
                    # ↓chave ↓array 
if (array_key_exists('jaca', $arr)) {
    echo 'Sim, esta chave existe. <br>';
}else {
    echo 'Não, esta chave não existe. <br>';
}

if (isset($arr['nome'])) {
    echo 'Sim, esta chave existe. <br>';
} else {
    echo 'Não, esta chave não existe. <br>';
}
          #↓ array ↓chave
if (isset($arr['profissão'])) {
    echo 'Sim, esta chave existe. <br>';
} else {
    echo 'Não, esta chave não existe. <br>';
}

#o isset() também funciona com vars

if (isset($var)) {
    echo 'Sim, esta var existe. <br>';
} else {
    echo 'Não, esta var não existe. <br>';
}
?>