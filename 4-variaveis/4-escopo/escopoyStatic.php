<?php 

/*
A var static é declarada com a instrução static
o valor da mesma é mantido e alterado a cada execução da função
é interessante este comportamento pois as vars de escopo local sempre são resetadas

*/

function teste(){
    $a=0; //quando a var não é static ela não se incrementa ou decrementa, ela sempre terá o mesmo valor, que no caso sempre será 1 já que esta função só incrementa
    $a ++;
    echo "$a sem Static <br>";
}
teste();
teste();
teste();

function testeStatic(){
    static $a = 0; //com static ela sempre irá ser incrementada quando a função for chamada
    $a ++;

    echo "$a com static <br>";
}

//Não é muito comum usar funções com var static.
testeStatic();
testeStatic();
testeStatic();
?>