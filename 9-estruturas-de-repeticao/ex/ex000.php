<?php 
$arr = ['carro', 13, 'moto', false, 'barco', 'avião', true, 'foguete', 23];

$x = count($arr);
$y = 0;
while ($y <= $x) {
    if (is_string($arr[$y])) {
        echo "$arr[$y] <br>";
    }
    $y++;
}
?>