<?php 
/**
 * A var local tem seu escopo definido dentro de uma função
 * ela nã é acessível fora da mesma
 * o seu valor sempre é resetado quando a função é finalizada
 */

 $n1 = 10;
 echo "$n1 global <br>";

 function teste(){
    $n1 = 22;
    echo "$n1 local <br>";
 }
 teste();

 function testando(){
    $n1 = 33;

    echo "$n1 local 2 <br>";
 }

 testando();

 teste();

 echo "$n1 global <br>";
?>