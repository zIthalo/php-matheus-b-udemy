<?php 
//O tipo de dado null tem apenas o valor null
#um caso de uso é checar se um var tem valor ou não
#Podemos checar se um valor é null usando a function is_null()

$var = null;

if (is_null($var)) {
    echo $var . '  ← Sem valor'; //Null é um falsy value
}

?>