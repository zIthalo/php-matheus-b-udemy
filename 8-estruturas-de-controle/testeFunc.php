<?php
function compararNumeros($n1, $n2){
     if ($n1 > $n2){
         echo "O 1º número é maior que o 2º";
     }elseif ($n2 > $n1) {
         echo "O 2º número é maior que o 1º";
     }else{
         echo "Os números são iguais";
     }
}
compararNumeros(5,5);
?>