<?php 

$arr = [10, 20 ,30, 40, 50, 60, 70, 80, 90, 100];
$c = 0;

while ($c < count($arr)){
    
    echo $arr[$c] . "<br>";
    if ($arr[$c] === 30 || $arr[$c] === 40) {
        echo "Pulou o passo " . $arr[$c] . '<br>';
        $c++;
        continue;
    }
    $c++;
}


?>