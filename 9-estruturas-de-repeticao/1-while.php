<?php
//definição do contador
$a = 0; 
//Iniciação da estrutura;
while ($a < 10) {
    //incremento do valor
    ++$a;//se eu coloco o incremento aqui em cima da saída, o valor se iniciará por 1 até 10, se eu colocar depois da saída o valor se iniciará por 0 até 9
    echo "$a <br>";//Saída do valor
}

echo '<h3>Continuando o código:</h3><br>';

#de 2 em dois;
$y = 0;
do {
    echo "$y <br>";
   $y+= 2;
} while ($y <= 10);

echo '<h3>Continuando o código:</h3><br>';

#Menos 10 em 10
for ($z=100; $z >= 0 ; $z-=10) { 
    echo $z . "<br>";
}

echo '<h3>Continuando o código:</h3><br>';

#só números ímpares
$n = 20;

while ($n >= 0) {
    if ($n % 2 != 0) {
        echo "$n <br>";
    }
    $n--;
}
echo '<h3>Continuando o código:</h3><br>';
#só números pares;
$n1 = 30;

while ($n1 >= 0){
    if ($n1 % 2 != 1) {
        echo "$n1 <br>";
    }
    $n1 --;
}
    

?>