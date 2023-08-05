<?php 
/*
    -lembra do implode? ele transforma um array para str ex: implode(', ', $arr); = primeiro se coloca os separadores e depois o array;
    -Agora temos o explode que transforma uma str em um array; explode(' ' $str); = primeiro o separador depois a str;
    -Quando a str não possui vírgulas e eu coloco o separador ',' a função não irá reconhecer pois não há vírgulas na str digitada. agora se eu colocar " " espaços como separadores a func vai reconhecer pois se é uma str de mais de uma palavra a func irá reconhecer os espaçõs e irá separar cada palavra em um índice
*/

    $str = 'manga jaca uva';
    $arrStr = explode(' ',$str);

    var_dump($arrStr);
    echo '<br>';
    print_r($arrStr);
    echo '<br>';

    $str2 = 'pêra, maçã, banana';
    $arrStr2 = explode(',',$str2);

    var_dump($arrStr2);
    echo '<br>';
    print_r($arrStr2);
    echo '<br>';

    #eu posso até passar em um loop para imprimir linha por linha:

    for ($i=0; $i < count($arrStr2); $i++) { 
        echo "$arrStr[$i] <br>";
    }

?>