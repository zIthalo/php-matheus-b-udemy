<?php 

$acesso = true;

if (is_bool($acesso)) {
    echo 'é boolean <br>';
}

$n0 = 0;
if(is_bool($n0)){ //aqui nada aparece, pois com valores falsos eu tenho que fazer comparações
    echo 'é boolean <br>';
}

if($n0 == false){
    echo "$n0 é false <br>";
}

if (is_bool(false)) {
    echo 'Este código aparecerá.';
}
?>