<?php 
/*
-COM A FUNÇÃO substr(), podemos resgatar apenas uma parte da str;
-EX: substr(str, início, fim);
-Str é a string que vamos que vamos procurar algo;
-Início é o índice inicial da palavraou texto;
-Fim é o índice final da palavra ou texto;
*/

$str = 'O rato roeu.';

$rato = substr($str, 2, 5);#aqui eu peguei a palavra rato da minha str a palavra está dentro da var str no índice 2 até o índice 5; Se eu omitir o último parâmetro ele irá pegar do índice que eu coloquei até o fim da str;
echo strtoupper($rato) . "<br>";

$ateOFim = substr($str, 2);

echo $ateOFim . '<br>';

$str2 = "the rat ABC";
$negativa = substr($str2,-3, 8); # aqui quando eu ponho números negativos eu pego de trás para frente, neste caso posso traduzir assim:
#substr()

echo $negativa . '<br>';
?>