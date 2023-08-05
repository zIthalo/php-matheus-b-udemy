<?php 
/*
Pegar a palavra queijo da frase: "Cadê meu queijo? Ele estava aqui em cima";

*/       #012345678901234567890123456
$frase = "Cadê meu queijo? Ele estava aqui em cima.";

$cheese = substr($frase,9,7);//no caso você pega o 1º índice da palavra e o length dela(que é o 3° parâmetro)
$estava = substr($frase, 21, 8);
$queijo = substr($frase, 10,6);
$was = substr($frase, 22, 6);

echo "<p>Frase: $frase</p>";

echo "<p>Palavra resgatada da frase: $cheese</p> <p><p>Palavra resgatada da frase 02: $estava</p>";

echo "$queijo <br> $was <br>";

?>