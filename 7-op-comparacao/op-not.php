<?php 

//o ! NOT, serve para converter expressões falsas em ture e expressões true em false
$n = 1;
$n1 = 4;
$n2 = 3;
$n3 = 2;

if (!($n3 > $n2)) {
    echo 'Expressão 1 verdadeira <br>';
}else {
    echo 'Expressão 1 falsa<br>';
}

if (!($n1 > $n2)) {
    echo 'Expressão 2 verdadeira <br>';
}else {
    echo 'Expressão 2 falsa <br>';
}

if (!($n1 >= $n)) {
    echo 'Expressão 3 verdadeira <br>';
}else {
    echo 'Expressão 3 falsa <br>';
}

?>