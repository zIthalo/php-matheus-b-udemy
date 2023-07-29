<?php 
/*
Crie uma função chamada sumEvenNumbers que recebe um número inteiro positivo como parâmetro.

A função deve retornar a soma de todos os números pares de 1 até o número fornecido, inclusive.

Utilize uma estrutura de repetição para percorrer os números e uma variável para acumular a soma.

*/
echo "<h1>    Somando números pares até o número fornecido </h1>";
function sumEvenNumbers($n){
    if (is_int($n) && $n > 2){
        echo "<p>Número fornecido: $n </p>";
        for ($i=1; $i< $n; $i++) { 
           if ($i%2 === 0) {
            $soma = $i + $i;
            echo "<p>$i + $i = ". $soma . "</p>";
           }
        }
    }else {
        echo "Deu errado <br>";
    }
}

sumEvenNumbers(100);
?>