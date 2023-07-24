<?php 

/*
*Como nas estruturas if, podemos aninhar loops;

*De preferência cada loop terá seu contador próprio para não dar conflito entre os loops;

*O loop interno será executado todas as vezes que o loop externo for por exemplo: se o loop externo tiver 5 repetições e o loop interno tiver 10, a cada repetição do externo o interno irá se repetir 10x então o cálculo é de 5x10;

*/
#NA PRÁTICA;

$i = 0;

while($i < 10){
    echo "<h3>Loop externo $i<br></h3>";
    $j = 0;//Para isso a var do contador tem que estar no escopo do 1º contador.
    while ($j <= 5) {
        echo "Loop interno $j<br>";
        $j ++;
    }
    $i++;
 }
?>