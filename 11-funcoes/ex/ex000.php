<?php 

$nomes = ['Ithalo', 'Hemilly', 'Willian', 'Maria'];

$implodido = implode(',', $nomes);# a função do implode é de transformar meu array em uma string a vírgula passada com 1º argumento serve para separar cada índice do meu array, no segundo argumento, o implode, vai querer saber qual array ele transformará em str.

echo $implodido . '<br>';
?>