<?php 
$peso = [
    'peso1' => 80, 
    'peso2' => 75, 
    'peso3' => 98
];

$pesoMax = 80;
$err = "O pacote está acima do peso, o peso excede $pesoMax kg <br>";
$ok = "Acesso liberado <br>";

if ($peso['peso1'] > $pesoMax) {
    echo "Peso total: " . $peso['peso1']. " ";
    echo $err;
}else {
    echo "Peso total: " . $peso['peso1'] . " ";
    echo $ok;
}

if ($peso['peso2'] > $pesoMax) {
    echo "Peso total: " . $peso['peso2'] . " ";
    echo $err;
} else {
    echo "Peso total: " . $peso['peso2'] . " ";
    echo $ok;
}

if ($peso['peso3'] > $pesoMax) {
    echo "Peso total: " . $peso['peso3'] . ' ';
    echo $err;
} else {
    echo "Peso total: " . $peso['peso3'] . ' ';
    echo $ok;
}
?>