<?php 
echo 5/2;
echo "<br>";
echo 2 . 3 . "<br>";
if (is_float(5 / 2)) {
    echo "És float <br>";
}
if (is_string(2 . 3)) {
    echo 'És string <br>';
}
$nome = 'ithalo';
$sobrenome = 'willian';

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto

?>