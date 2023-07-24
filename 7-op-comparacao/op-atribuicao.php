<?php 

//EXISTEM 5 SINAIS DE ATRUBUIÇÃO E VAMOS VÊ-LOS AGORA:
/*
RECEBE - =
SOMA E RECEBE - += 
SUBTRAI E RECEBE - -=
(↑↑mais utilizados↑↑)

MULTIPLICA E RECEBE - *=
DIVIDE E RECEBE - /=
RECEBE O RESTO DA DIVISÃO %=
*/

$a = 0;
$a += 10;
echo "$a <br>";

$b = 5;
$b -= 3;
echo "$b <br>";

$c = 3;
$c *= 7;
echo "$c <br>";

$d = 20;
$d /= 2;
echo "$d <br>";

//podemos fazer com variáveis
echo $a %= $c;
?>