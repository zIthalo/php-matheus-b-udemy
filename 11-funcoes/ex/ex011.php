<?php 
/*
    -Crie uma função chamada isPrime que recebe um número inteiro positivo como parâmetro.
    
    -Caso o número fornecido seja menor que 2, retorne false.

    -A função deve verificar se o número fornecido é um número primo.

    -Um número primo é aquele que é divisível apenas por 1 e por ele mesmo.

    -Caso contrário, percorra os números de 2 até a raiz quadrada do número fornecido e verifique se algum deles é um divisor do número. Se encontrar um divisor, retorne false. Caso contrário, retorne true.



*/
function isPrime($n){
   if (is_int($n) >= 2) {
    $count = 0;
    for ($i=1; $i <= $n; $i++) { 
        if ($n % $i == 0) { #a lógica dos números primos é que ele só tenha dois divisores com o resto 0
            $count++;
        }
    }
    if ($count === 2) {
        return "<p>O número <strong>$n</strong> é primo. Pois possui <strong>$count</strong> divisores.</p>";
    }else {
        return "<p>O número <strong>$n</strong> não é primo. Pois possui <strong>$count</strong> divisores.</p>";
    }
   }else{

    return "<h2>ERRO: Digitado: <strong>$n</strong>. Não é um número inteiro ou é menor que 2</h2>";

   }

}
echo isPrime(2);

/*
function isPrime($n){
    if (is_int($n) && $n >= 2) {
        if ($n%1 == $n && $n%$n == 0) {
            echo "<p>:) O número digitado, $n, é um número primo";
        }else{
            echo "<p>:/ O número digitado, $n, não é um número primo";
        }
    }else {
        echo "<h2>ERRO: Digitado: $n. Não é um número inteiro ou é menor que 2</h2>";
    }
}
isPrime(3);
*/

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: goldenrod;
            
        }
    </style>
</head>
<body>

</body>
</html>
        