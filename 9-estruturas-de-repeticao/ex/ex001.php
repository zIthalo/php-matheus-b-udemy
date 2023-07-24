<?php 

$x = 4;

while ($x <= 30) {
    echo "$x <br>";
    if ($x === 24){
        echo "Parando o loop<br>";
        break;
    }
    $x += 2;
}
echo "Saiu do loop <br>";
?>