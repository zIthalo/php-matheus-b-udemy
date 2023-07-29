<?php 
/*
    -PARA CHAMAR FUNÇÕES BASTA DIGITAR O NOME DELA E ABRIR E FECHAR PARÊNTESIS;
    -EX. teste();
    -ALGUMAS FUNÇÕES EXIGEM PARÂMETROS;
    -O ATO DE CHAMAR FUNÇÕES TAMBÉM É CHAMADO DE INVOCAR;
    -O PHP TEM DIVERSAS FUNÇÕES PARA UTILIZARMOS NO NOSSO CÓDIGO EX. strlen(), strtoupper(), strtolower(), print_r(), var_dump();
*/

    #DICA: TENTE SEMPRE COLOCAR AS FUNÇÕES NO TOPO DO CÓDIGO APÓS A DECLARAÇÃO TAG PHP
    function soma($a, $b){
        $soma = $a + $b;
        echo $soma;
    }
    #MINHA FUNÇÃO;
    soma(15,15);

    #FUNÇÃO DO PHP
    echo '<br>';
    echo strtoupper("ithalo");
    echo '<br>';
    echo strtolower("ITHALO");


?>