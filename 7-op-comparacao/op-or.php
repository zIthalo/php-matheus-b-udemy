<?php 
//Só para registrar mas com o operador || eu posso comparar até expressóes com && ex:

$n1 = 10;
$n2 = 20;
$n3 = 30;
$n4 = 40;

if(($n1 > $n2 || $n4 > $n2) && $n3 < $n1){
    echo "True 01";
}
if (($n1 === $n2 && $n3 === $n4) || $n4 > $n1 ) {
    echo 'True 02';
}
?>
