<?php 
    /*
    1- criar um array
    2- transformar o array em string e saparar cada índice por vírgula V
    __________________________________x________________________________________

    1-  criar uma função que receba 3 números e que multiplique os 3 V
    __________________________________x________________________________________
    
    1- criar uma função que receba um nome e um sobrenome e imprima eles concatenados V

    __________________________________x________________________________________

    1- fazer uma função que receba um nome e a idade de uma pessoa e imprima uma saudação V
    
    __________________________________x________________________________________

    1- fazer uma função que diga se um número é par ou ímpar V

    __________________________________x________________________________________

    1- fazer uma função que receba um número e retorne ele ao quadrado V

    __________________________________x________________________________________
 
    1- criar um array V
    2- preencher este array com loop V
    3- retornar os números maiores que 7 deste array V
    4- faça isso criando uma função V

    __________________________________x________________________________________

    1- Crie uma função chamada sumEvenNumbers que recebe um número inteiro positivo como parâmetro. V

    2- A função deve retornar a soma de todos os números pares de 1 até o número fornecido, inclusive. V

    3- Utilize uma estrutura de repetição para percorrer os números e uma variável para acumular a soma. V

    __________________________________x________________________________________

    1-EXERCÍCIO COM FUNCTIONS DE PARAMS COM VALOR DEFAULT; V
    2-CRIAR FUNÇÃO CHAMADA DEFINE COR DE CARRO; V
    3-ELA TERÁ UM PARAM DEFAULT CHAMADO COR E COM O VALOR VERMELHA; V
    4-RETORNE A COR DO CARRO;V
    5-RETORNE TANTO COM O VALOR DO PARAM DEFAULT COMO COM A COR;V

    __________________________________x________________________________________

    1-Crie uma função chamada countVowels que recebe uma string como parâmetro.

    2-A função deve retornar a quantidade de vogais presentes na string.

    3-Utilize uma estrutura de repetição para percorrer cada caractere da string.

    4-Utilize uma variável para armazenar o contador de vogais.

    5-Considere que as vogais são as letras "a", "e", "i", "o" e "u", em minúsculas ou maiúsculas.    

    Dica:

    Inicialize o contador de vogais com zero antes do início do loop.

    Utilize um loop for para percorrer cada caractere da string.

    Dentro do loop, verifique se o caractere é uma vogal, utilizando a função strpos para buscar o caractere na sequência "aeiouAEIOU". Se a função retornar um valor diferente de false, significa que o caractere é uma vogal.

    Se o caractere for uma vogal, incremente o contador em 1.

    Ao final do loop, retorne o valor do contador de vogais.

    __________________________________x________________________________________

    1-crie uma func que recebe um array de itens de supermercado
    2-retorne este array em formato de string separadas por vírgula

    __________________________________x________________________________________

    1-Crie uma função chamada isPrime que recebe um número inteiro positivo como parâmetro.
    
    2-Caso o número fornecido seja menor que 2, retorne false.

    3-A função deve verificar se o número fornecido é um número primo.

    4-Um número primo é aquele que é divisível apenas por 1 e por ele mesmo.

    5-Caso contrário, percorra os números de 2 até a raiz quadrada do número fornecido e verifique se algum deles é um divisor do número. Se encontrar um divisor, retorne false. Caso contrário, retorne true.

    __________________________________x________________________________________

    1-Crie uma função chamada sumDigits que recebe um número inteiro como parâmetro.

    2-A função deve calcular a soma dos dígitos desse número.

    3-Retorne o valor da soma.

    __________________________________x________________________________________
    */

    #mission 01-
    echo "<h2>Mission 01</h2>";
    $array = [];
    for ($i=0; $i < 20; $i++) { 
        array_push($array, $i);//quem eu quero preencher, com o que eu quero preencher;
    }
    
    function transformaArrStr($ar){
        
        return "<p>" . implode(", ", $ar) . "</p>";
    }

    var_dump(transformaArrStr($array));

    echo "<h2>Mission 02</h2>";

    function multiplica3($a = 0, $b = 0, $c = 0){
        $multiplicando = $a * $b * $c;
        return "A multiplicação entre $a, $b e $c é: $multiplicando";
    }

    $m1 = 3;
    $m2 = 5;
    $m3 = 10;

    echo multiplica3($m1, $m2, $m3);

    echo "<h2>Mission 03</h2>";

    function nomeSobrenomeConcat($n, $s){
        $concat = "Olá, $n $s!";
        return $concat;
    }
    $nome = 'Ithalo';
    $sobrenome = 'Willian';
    echo nomeSobrenomeConcat($nome, $sobrenome);

    echo "<h2>Mission 04</h2>";

    function nomeIdadeMsg($n, $i){
        if (is_string($n) && is_int($i)) {
            $sauda = "Meu nome é $n, tenho $i anos.";
            return $sauda;
        }else {
            return "ERRO: Digite seu nome e a sua idade";
        }
    }
    $idade = 26;
    echo nomeIdadeMsg($nome, 26);

    echo "<h2>Mission 05</h2>";

    function numeroeParOuImpar($n){
        if (is_int($n)) {
            if ($n%2 == 0) {
                return "O número <strong>$n</strong> é par<br>";
            }else{
                return "O número <strong>$n</strong> é ímpar<br>";
            }
        } else {
            return "ERRO: Digite um número inteiro<br>";
        }
    }
    $n1 = 30;
    $n2 = 41;

    echo numeroeParOuImpar($n1);
    echo numeroeParOuImpar($n2);

    echo "<h2>Mission 06</h2>";

    function retornaAoQuad($n){
        if (is_numeric($n)) {
            $quad = $n ** 2;
            return "O número $n ao quadrado fica: $quad<br>";
        } else {
            return "ERRO: Digite um número<br>";
        }
    }

    echo retornaAoQuad(30);

    echo "<h2>Mission 07</h2>";

    $arrPre = [];

    for ($i=0; $i < 20; $i++) { 
        array_push($arrPre, $i);
    }
    function maiorQueSete($arr){
        $guardaVal = [];
        if (is_array($arr)) {
            for ($i=0; $i < count($arr); $i++) { 
                if ($arr[$i] > 7) {
                    array_push($guardaVal, $i);
                }
            }
            return implode(", ",$guardaVal);
        }
    }
    echo 'Retornando os valores maiores que 7 do array ' . maiorQueSete($arrPre) . '<br>';

    echo "<h2>Mission 08</h2>";

    function sumEvenNumbers($n){
        $par = 0;
        $soma = 0;
        $tot = 0;
        if (is_int($n) && $n >= 10) {
            for ($i=0; $i < $n; $i++) { 
                if ($i%2 == 0) {
                    $par = $i;
                    $soma = $par + $i;
                    $tot += $soma;
                    echo "Somando $par + $i = $soma <br>";
                }
            }
            return "Total somado: $tot <br>";
        } else {
            return "ERRO <br>";
        }
    }

    echo sumEvenNumbers(10);

    echo "<h2>Mission 09</h2>";

    function defineCorCarro($carro, $def = 'Vermelha'){
        if (is_string($carro) && is_string($def)) {
            return "Carro $carro da cor $def <br>";
        } else {
            return "ERRO: Digite o nome do seu carro e a cor. <br>";
        }

    }
    $gol = 'VW Gol';
    $cor = 'Prata';
    $astra = 'GM Astra';
    echo defineCorCarro($gol, $cor);
    echo defineCorCarro($astra);
   
    echo "<h2>Mission 10</h2>";
    /*
    1-Crie uma função chamada countVowels que recebe uma string como parâmetro.

    2-A função deve retornar a quantidade de vogais presentes na string.

    3-Utilize uma estrutura de repetição para percorrer cada caractere da string.

    4-Utilize uma variável para armazenar o contador de vogais.

    5-Considere que as vogais são as letras "a", "e", "i", "o" e "u", em minúsculas ou maiúsculas.    

    Dica:

    Inicialize o contador de vogais com zero antes do início do loop.

    Utilize um loop for para percorrer cada caractere da string.

    Dentro do loop, verifique se o caractere é uma vogal, utilizando a função strpos para buscar o caractere na sequência "aeiouAEIOU". Se a função retornar um valor diferente de false, significa que o caractere é uma vogal.

    Se o caractere for uma vogal, incremente o contador em 1.

    Ao final do loop, retorne o valor do contador de vogais.
    */

    function countVowels($str){
        $vowels =  array('a', 'á', 'e', 'é' , 'i', 'í' ,'o', 'ó', 'u', 'ú', 'A', 'Á', 'E', 'É', 'I', 'Í' , 'O', 'Ó' ,'U', 'Ú');
        $count = 0;
        if (is_string($str)) {
            for ($i=0; $i < strlen($str) ; $i++) { 
                if (in_array($str[$i], $vowels)) { //se a posição de I dentro da var str tiver algum valor de vowels
                    $count ++;
                }
            }
            
            return "A palavra $str tem $count vogais;<br>";
        } else {
            return "ERRO: Digite uma palavra <br> Você digitou: $str <br>";
        }
    }
    $word = 'característica';
    $animal = 'avestruz';
    $nome = 'Ithalo';
    echo countVowels($word);
    echo countVowels($animal);
    echo countVowels($nome);


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