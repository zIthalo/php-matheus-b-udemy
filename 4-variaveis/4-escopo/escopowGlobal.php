<?php 
/**
 * A característica principal do global é ser declarado fora de funções;
 * por comportamento padrã]o não são acessíveis dentro de funções;
 * precisamos utilizar a palavra global para fazer isso;
 * A função da var global não ser acessível dentro de uma func previne muitos problemas no software;
 * 
 */

 $teste = 321;
    echo "$teste global 1 <br>";
 if (5 > 3) {
    $teste = 123;
    echo "$teste if 1 <br>";
 }
 echo "$teste global 2 <br>";

 function funcao(){
    $teste = 'kkkkk';
    echo "$teste local <br>";

 }
 funcao();

 function testandoGlobal(){
    global $teste;

    $teste = 2; //Mudando o valor da minha var 
    echo "$teste global 1 <br>";
 }

 testandoGlobal();

 echo "$teste global 3 <br>";
?>