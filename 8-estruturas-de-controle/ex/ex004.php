<?php 

$inteiro = 3;
$real = 5.6;
$str = 'Ithalo';
$bool = false;

$msgInt = 'A variável é do tipo int. <br>';
$msgIntEl = 'A variável não é do tipo int. <br>';

$msgReal = 'A variável é do tipo float. <br>';
$msgRealEl = 'A variável não é do tipo float. <br>';

$msgStr = "A variável é do tipo str. <br>";
$msgStrEl = 'A variável não é do tipo str. <br>';

$msgBool = 'A variável é do tipo boolean. <br>';
$msgBoolEl = 'A variável não é do tipo boolean. <br>';

if (is_int($real)) {
    echo $msgInt;
}else {
    echo $msgIntEl;
}

if (is_float($inteiro)) {
    echo $msgReal;
} else {
    echo $msgRealEl;
}

if (is_string($bool)) {
    echo $msgStr;
} else {
    echo $msgStrEl;
}

if (is_bool($str)) {
    echo $msgBool;
} else {
    echo $msgBoolEl;
}
?>