<?php 
/*Crie uma função chamada sumDigits que recebe um número inteiro como parâmetro.

A função deve calcular a soma dos dígitos desse número.

Retorne o valor da soma.

*/

function sumDigits($n){
    if (is_int($n)) {
        $n = (string) $n;
        $soma = 0;
        for ($i=0; $i < strlen($n); $i++) { 
            $soma += $n[$i];
        }
        return "<p>A soma dos dígitos do número <strong>$n</strong> é igual a: <strong>$soma.</strong> </p>";
        
    } else {
        return "ERRO: <p>Não foi digitado um <strong>número inteiro</strong> ou foram digitadas <strong>letras.</strong></p>";
    }
}

echo sumDigits(22);
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