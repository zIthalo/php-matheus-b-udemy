<?php 
 #- PERCORRER DETERMINADA STR E RETORNAR O NÚMERO DE LETRAS 'A' DESTA STR;



 $frase = 'O rato roeu a roupa do rei de roma';
 $l = 'a';
 $count = 0;
 for ($i=0; $i < strlen($frase) ; $i++) { 
    if ($frase[$i] === $l) {
        $count++;
    }
 }
 echo "A quantidade de letras 'A' na frase é $count";
?>