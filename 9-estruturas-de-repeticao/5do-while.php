<?php 

/*
-ESTA ESTRUTURA É MENOS USADA DO QUE O WHILE;
-TEM UMA SINTAXE INVERTIDA;
EX;
$c = 0;
do {
    echo "olá";
}while($c < 10);
*/

$j = 0;

do {
    echo "Testando o do while: $j <br>";
    if ($j == 9) {
        echo "Meu nome é ithalo <br>";
    }
    $j++;
} while ($j < 10);

$i = 10;

do {
    echo "Teste decremendo com do while: $i <br>";
    $i--;
} while ($i > 0);

?>