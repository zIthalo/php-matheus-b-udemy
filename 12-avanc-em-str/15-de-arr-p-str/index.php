<?php 
#Só relembrando o implode ele transforma um array para str
    $arr = ['macarrão', 'arroz', 'feijão', 'batata'];
    $str = implode(', ', $arr);
    echo "$str <br>";
    $str2 = implode('<br>', $arr);
    echo $str2;

?>