<?php 

$n1 = 3.5;
$n2 = 3;
$n3 = 60.9;

$multi = 2;
$novoN;

$strA = 'Olá';
$strB = 'E ai';
$strC = 'Oi';

if (is_numeric($strB)) {
    $novoN = $strB * $multi;
    if ($novoN > 100) {
        echo 'Passou dos 100. <br>';
    }else {
        echo 'Não passou dos 100. <br>';
    }
} else {
    echo 'A var não é numérica. <br>';
}

if (is_numeric($n2)) {
    $novoN = $n2 * $multi;
    if ($novoN > 100) {
        echo 'Passou dos 100. <br>';
    }else {
        echo 'Não passou dos 100. <br>';
    }
} else {
    echo 'A var não é numérica. <br>';
}

if (is_numeric($n3)) {
    $novoN = $n3 * $multi;
    if ($novoN > 100) {
        echo 'Passou dos 100. <br>';
    }else {
        echo 'Não passou dos 100. <br>';
    }
} else {
    echo 'A var não é numérica. <br>';
}


?>