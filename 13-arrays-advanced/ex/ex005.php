<?php 
    /*
        -crie vars com características de algum animal ou objeto;
        -depois crie um array com compact();
        faça um loop no array e imprima os valores;
    */

    $nome = 'onça';
    $pintas = true;
    $patas = 4;
    $olhos = 2;

    $felino = compact('nome', 'pintas', 'patas', 'olhos');

    #para imprimir um array associativo usar o for each;
    //  foreach($felino as $caracteristica){
    //      echo "$caracteristica <br>";
    //  }
    /*
    Saída: 
    onça
    1
    4
    2
    */

    #agora se eu quiser mostrar o nome do índice e o valor do índice eu adiciono mais uma info no foreach;
    foreach($felino as $caracteristica => $value){
        echo "$caracteristica: $value <br>";
    }
    /*
    Saída:
    nome: onça
    pintas: 1
    patas: 4
    olhos: 2
    */
?>