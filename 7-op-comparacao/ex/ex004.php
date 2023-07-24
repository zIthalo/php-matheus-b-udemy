<?php 
$a = (int) 'testando';
$b = (int) 12.9;
$c = (int) true;
$d = (int) [1,2,3];

if (is_int($a)) {
    echo $a  . ' O valor de $a é int <br>';
    #A saída desse $a foi 0, porque não tem como se converter strings para ints, então o php transforma a string em 0
}

if (is_int($b)) {
    echo $b . ' O valor de $b é int <br>';
    #A saída desse $b foi 12, porque ele corta as casas float e arredonda para baixo   
}

if (is_int($c)) {
    echo $c . ' O valor de $c é int <br>';
    #A saída do $c foi 1, já que true é = a 1. Se fose converter um false para int a saída seria 0
}

if(is_integer($d)){
    echo $d . ' O valor de $d é int <br>';
    #A Saída do $d foi 1, porque qualquer array vira o n1
}
?>