<?php 
$arrAY = [3,2,7];

# echo "$arrAY"; o echo dá erro para imprimir arrays pois ele irá tentar converter os arrays para strs

print_r($arrAY); #com print_r() funciona

echo "O valor do 2º índice do array é $arrAY[1]"; //o echo é capaz de imprimir um índice de um array

//Um array pode armazenar mais de um tipo, mas o bom é criar um array de somente um tipo

$arr = [1, 39, "Ithalo", true];
echo $arr[2];
?>