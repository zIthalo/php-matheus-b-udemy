<?php 
/*
    -Podemos criar muitas vars com base em um array, ou seja, você tem um array com vários dados e para cada dado você cria uma variável;
    -Para isso vamos utilizar a função list();
    -Ex: list($nome,$idade,$profissao) = $pessoa ← neste array tenho um nome, uma idade e uma profissão.;
*/
$pessoa =['Ithalo', 26, 'Programador'];
list($nome,$idade,$profissao) = $pessoa;
print_r($pessoa);
echo '<br>';
echo '<br>';

echo "Meu nome é $nome <br>Tenho $idade anos <br> Sou $profissao";
/*
 Saída: 
Meu nome é Ithalo
Tenho 26 anos
Sou Programador
 */

?>