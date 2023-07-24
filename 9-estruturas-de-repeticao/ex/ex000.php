<?php 
$arr = ['carro', 13, 'moto', false, 'barco', 'avião', true, 'foguete', 23, 55, 'jaca', 'juca', 101, 65, 67, 'tiggo', 'celta'];

$x = count($arr); #Esta function vai me retornar o tamanho do meu array;
$y = 0;
echo '<h3>Imprimindo somente as STRINGS do array.</h3>';
while ($y < $x) { #enquanto y for < que x, que recebeu o tamanho do meu array faça:
    if (is_string($arr[$y])) { #se a posição de y dentro do meu array for string faça:
        echo "$arr[$y] <br>"; #imprima o meu array na posição de y
    }
    $y++; #y + 1
}
echo '<h3>Imprimindo somente os booleans do array.</h3>';

$a = count($arr);
$b = 0;

while ($b < $a) {
    if (is_bool($arr[$b])) {
        echo "$arr[$b] <br>";
    }
    $b++;
}

echo '<h3>Imprimindo somente os NÚMEROS do array.</h3>';

$c1 = count($arr);
$c = 0;

while ($c < $c1) {
    if (is_numeric($arr[$c])) {
        echo "$arr[$c] <br>";
    }
    $c++;
}

?>