<?php 

$arr = [];

for ($i=10; $i <= 20 ; $i++) { 
    array_push($arr, $i);
    
}
print_r($arr);
echo '<br>';

for ($i=0; $i < count($arr); $i++) { 
    if ($arr[$i] % 2 != 0) { #resto da divisão diferente de 0 é = a ímpar
        echo "Número $arr[$i] <br>";
    }
}

?>