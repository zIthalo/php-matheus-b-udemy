<?php 

    function parOuImpar($num){
       if(is_int($num)) {
            if ($num % 2 == 0 ) {
            echo "<p>Número $num: é par </p>";
        }else{
            echo "<p>Número $num: é ímpar </p>";
        }
    }else {
        echo "<h3>ERRO: Digite um número inteiro. </h3>";
    }
    }

    $n1 = 3;
    $n2 = 2;

    echo parOuImpar($n1);

    echo parOuImpar($n2);

    echo parOuImpar(101);
    
    echo parOuImpar(122);

    echo parOuImpar("102");


?>