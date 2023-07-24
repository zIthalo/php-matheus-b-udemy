<?php 

/**
 * os parâmetros de function também são considerados tipos de variáveis
 * Este recurso nos ajuda a criar funções com valores dinâmicos
 * podendo alterálos a cada invocação da mesma
 * podemos passar mais de um parâmetro para uma função
 */


 function soma($a, $b){
    echo $a + $b;
    echo '<br>';
 }


 //Eu entendo que os parâmetros de uma função são vars criadas para receberem um valor posteriormente, que fazem determinada funcionalidade
 soma(2, 4);
 soma(8,8);
 soma(2667, 32.99);
?>