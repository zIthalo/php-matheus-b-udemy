<?php 
//Essas variáveis por referência são as mesmas coisas dos arrays de js, se eu mudar o primeiro, todos mudarão veja o exemplo

$x = 10;

$y =& $x;// usando este símbolo =& eu estou referenciando a var y para a var x, ou seja, todo o valor que a var x receber a var y espelhará este valor

echo "$x <br> $y <br>"; //Ambos terão o valor de 10

$x = 20;

echo "$y <br>"; //Agora o $y tem o valor de 20 bem como o $x pois eles apontam para o mesmo lugar na memória

$y = 30;

echo "<br> $x"; //Da mesma forma o valor de x irá mudar se eu alterar o valor de y

// da mesma forma funciona para strings

$nome = 'ithalo';
$nome2 =& $nome;

echo "<br> $nome <br> $nome2";


?>