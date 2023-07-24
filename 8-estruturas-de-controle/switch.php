<?php 

#ESTRUTURA SWITCH CASE
/*
-PODE SUBSTITUIR O IF EM ALGUNS CASOS;
-UTILIZAMOS A INSTRUÇÃO ===BREAK=== PARA PARAR A FUNÇÃO;
-PODEMOS COLOCAR A INSTRÇÃO ===DEFAULT=== PARA FAZER UMA AÇÃO QUANDO NENHUMA CONDIÇÃO FOR SATISFEITA, COMO SE FOSSE UM ELSE.
*/

$x = 22;

switch ($x) {
    case 0:
        echo "A var x é igual a $x<br>";
        break;
    case 1:
        echo "A var x é igual a $x<br>";
        break;
    default:
        echo "A var x é igual a $x<br>";
        break;
}

#PORQUE NESTE CASO É MELHOR USAR O SWITCH DO QUE UM IF, ELSEIF E ELSE;
#JÁ QUE SÓ É PARA CONFERIR O VALOR DE X, SEM TER OPERADORES DE COMPARAÇÃO, COM O SWITCH FICA UM CÓDIGO MAIS SIMPLES DE SE ENTENDER
#EX COM IF

if ($x === 0) {
    //
} elseif ($x == 1) {
    //
} else {
    //
}

#SWITCH COM STRINGS;

$y = 'Ithalo';

switch ($y) {
    case 'Ithalo':
        echo "Este foi o criador deste código.<br>";
        break;
    case 'Matheus':
        echo "Este foi o professor.<br>";
        break;
    default:
        echo "Sujeito desconhecido.<br>";
        break;
}
?>