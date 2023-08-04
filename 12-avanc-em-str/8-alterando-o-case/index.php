<?php 

    /*
        -strtolower($var); Altera todos os caracteres da str para minúsculas
        -strtoupper($var); Altera todos os caracteres para maiúsculas
    */
    $str0 = 'str1';
    $str1 = 'STR2';
    echo $str0 . '<br>';
    echo $str1 . '<br>';
    $caixaAlta = strtoupper($str0);
    $caixaBaixa = strtolower($str1);

    echo $caixaAlta . '<br>';
    echo $caixaBaixa . '<br>';
?>