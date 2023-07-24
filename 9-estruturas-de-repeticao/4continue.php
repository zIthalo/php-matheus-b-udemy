<?php 
/*
O continue serve para pular uma instrução ou contagem do loop

como podemos ver no exemplo abaixo nós pulamos a instrução 7 e 5
*/
$c = 10;

while ($c > 0) {

    if ($c == 5 || $c ==7){
        echo "<h4>Pulou a execução $c <br></h4>";

        $c--; //Se eu não decrementar aqui o meu loop fica infinito *Lembrar de decrementar quan utilizar o ===continue===

        continue;
    }

    echo "Executando o loop $c <br>";

    $c--;
}
?>