<?php 
//Converta a seguinte str para array: carro - barco - navio - jangada

$str = 'carro - barco - navio - jangada';
$arrStr = explode('-', $str); #apartir de qual separador? Qual var?
#explode transforma de var para arr
var_dump($arrStr);
echo '<br>';

for ($i=0; $i < count($arrStr); $i++) { 
    echo "$arrStr[$i]<br>";
}

?>