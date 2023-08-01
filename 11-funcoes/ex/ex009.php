<?php 
/*
Crie uma função chamada countVowels que recebe uma string como parâmetro.

A função deve retornar a quantidade de vogais presentes na string.

Utilize uma estrutura de repetição para percorrer cada caractere da string.

Utilize uma variável para armazenar o contador de vogais.

Considere que as vogais são as letras "a", "e", "i", "o" e "u", em minúsculas ou maiúsculas.    

Dica:

Inicialize o contador de vogais com zero antes do início do loop.

Utilize um loop for para percorrer cada caractere da string.

Dentro do loop, verifique se o caractere é uma vogal, utilizando a função strpos para buscar o caractere na sequência "aeiouAEIOU". Se a função retornar um valor diferente de false, significa que o caractere é uma vogal.

Se o caractere for uma vogal, incremente o contador em 1.

Ao final do loop, retorne o valor do contador de vogais.
*/

    function countVowels($str){
        if (is_string($str)) {
            $vowels = array('a','e','i','o','u','A','E','I','O','U');
            $count = 0;
            for ($i=0; $i < strlen($str); $i++) { 
                if (in_array($str[$i], $vowels)) {
                    $count ++;
                }
            }
            
        }else {
            echo '<h3> ERRO: Esta função só aceita letras ou palávras </h3>';
        }
        return "O nome $str, tem $count vogais.";
    }

    echo countVowels('Ithalo');



    /*
    A função in_array() em PHP é utilizada para verificar se um determinado valor está presente em um array. Ela retorna true caso o valor seja encontrado no array e false caso contrário.

Sintaxe:

php
in_array(mixed $needle, array $haystack, bool $strict = false): bool

Parâmetros:
$needle: O valor que você deseja procurar no array.
$haystack: O array onde a busca será realizada.
$strict (opcional): Se o parâmetro $strict é definido como true, a função irá comparar os valores usando o operador de igualdade estrita (levando em conta o tipo de dado), ou seja, o valor e o tipo devem ser idênticos. Se definido como false, a função fará uma comparação comum.
Retorno:

A função retorna true se o valor $needle estiver presente em $haystack.
Caso contrário, a função retorna false.

Exemplo de uso:
php
$frutas = array('maçã', 'banana', 'laranja', 'morango');

if (in_array('laranja', $frutas)) {
    echo "Laranja está no array de frutas!";
} else {
    echo "Laranja não está no array de frutas!";
}
Neste exemplo, a função in_array() é utilizada para verificar se o valor 'laranja' está presente no array $frutas. Como 'laranja' está no array, a mensagem "Laranja está no array de frutas!" será exibida na saída.






    
    
    
    */
?>