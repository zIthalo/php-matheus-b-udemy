<?php 

/*
Podemos ordenar de forma crescente um array com a função sort();

para ordenar de forma inversa usamos rsort();
*/

$contando = [1,3,2,4,6,5,7,9,8,0,16,15,14,13,12,11,10];
$vogais = ['e', 'i', 'a', 'u', 'o'];

sort($contando);#ordena em ordem numérica
sort($vogais);#ordena em ordem alfabética

#no caso de sort e rsort eu estou mudando de fato um array, essas funcs não servem para serem salvas em vars porque só retornarão true e não vão retornar o valor da arr organizada

print_r($contando);
echo "<br>";
print_r($vogais);
echo "<br>";

rsort($contando);#organiza do maior para o menor
rsort($vogais);#Ordem desalfabética rs
$contandoStr = implode(', ', $contando);#transformando os arr em strs para melhor leitura
$vogaisStr = implode(', ', $vogais);

echo "$contandoStr<br>$vogaisStr<br>";
?>