<?php 
/*
    -A FUNÇÃO printf TEM A FUNCIONALIDADE SEMELHANTE A PRINT;
    -PORÉM PODEMOS IMPRIMIR VALORES DE FORMA DINÂMICA UTILIZANDO O SÍMBOLO %;

    -EX
    printf("Número %d,1);
*/  
    # %s -> string;
    # %d -> int;
    # %f -> float; (%.2f significa: duas casas após a vírgula);

    $nome = 'Ithalo';
    printf("O nome é %s <br>", $nome); #este %s significa string, neste caso, eu quero dizer que depois de 'O nome é', tenha uma string %s que será a minha var do tipo str $nome.

    $idade = 26;
    printf("A idade é %d <br>", $idade);

    $float = 1.6;
    printf("Xuxu tá custando %.2f e o cará ta custando %.2f", $float, 1.99);
?>