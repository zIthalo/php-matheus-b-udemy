<?php 
//Este tipo de operador serve para converter um type cast em outro, por exemplo, um int em float, uma string em float, um int em string, e etc

//GERALMENTE ISSO SÓ SERÁ MAIS USADO PARA CONVERTER STRINGS EM INTS OU FLOATS

//NA PRÁTICA:

$a = (int) "12";

echo $a . '<br>';
echo $a  + 10 . "<br>";
//SABENDO QUE SOMA COM STRINGS DÁ CERTO EM PHP, COMO SABER SE O VALOR PASSADO REALMENTE VIROU INT? EXISTEM 2 FORMAS:

if ($a === 12) {
    echo 'Os valores são identicos <br>';
}
if (is_integer($a)) {
    echo 'A variável $a tem o valor do tipo integer <br>';
}

//COM FLOAT
$b = (float) '3.56';

if ($b === 3.56) {
    echo 'A var $b possui o valor idêntico ao numérico <br>';
}
if (is_float($b)) {
    echo 'A var $b tem o valor do tipo float <br>';
}

//COM STR
$c = (string) 14.99;

if ($c === '14.99') {
    echo 'Os valores são identicos <br>';
}

if (is_string($c)) {
    echo 'O valor da var $c é do tipo string';
}
?>