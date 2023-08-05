<?php 
    /*
        -criar um arr com a func range de 10 a 45;
        -imprimir os números com a soma de 6;
        -se passar de 30 a soma, imprima, também, que o número é muito alto;
    */

    $arr = range(10,45);
    for ($i=0; $i < count($arr); $i++) {
    $soma = $arr[$i] + 6;
        if ($soma > 30) {
        echo "O número $soma é muito alto <br>";
        break;
        
    }else{
        echo "$soma <br>";
    } 
    }
    

    

?>