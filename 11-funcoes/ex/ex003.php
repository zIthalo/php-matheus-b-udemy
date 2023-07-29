<?php 
function pessoa($nome, $idade){
    if (is_string($nome) && is_int($idade)) {
        echo "<p>Olá, meu nome é $nome e tenho $idade anos</p>";
    }else{
        echo "<h3>ERRO: Insira o ('nome', idade-em-números-inteiros)</h3>";
    }
}

    $nome = 'Ithalo';
    $idade = 26;
    echo pessoa($nome, $idade);

?>