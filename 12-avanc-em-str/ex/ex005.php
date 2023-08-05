<?php 
//Converta a seguinte str para array: carro - barco - navio - jangada

$str = 'carro - barco - navio - jangada';
$arrStr = explode('-', $str);

var_dump($arrStr);
echo '<br>';

for ($i=0; $i < count($arrStr); $i++) { 
    echo "$arrStr[$i]<br>";
}

?>