<?php 
$arr = ['carro', 13, 'moto', false, 'barco', 'avião', true, 'foguete', 23];

$x = count($arr);
$y = 0;
echo '<h3>Imprimindo somente as STRINGS do array.</h3>';
while ($y < $x) {
    if (is_string($arr[$y])) {
        echo "$arr[$y] <br>";
    }
    $y++;
}
?>