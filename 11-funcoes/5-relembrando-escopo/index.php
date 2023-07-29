<?php 
/*
    -NAS FUNÇÕES TEMOS UM ESCOPO CHAMADO DE LOCAL, ONDE AS SUSA VARS SÃO EXCLUSIVAMENTE DELAS;
    
    -PODEMOS UTILIZAR VARIÁVEIS GLOBAIS COM A INSTRUÇÃO global;

    -E TAMBÉM HÁ O static, ONDE PODEMOS MANTER UM VALOR APÓS A EXECUÇÃO DE UMA FUNÇÃO, O QUE NORMALMENTE É RESETADO;

*/

    $a = 10;
    $b = 15;

    function escopoLoc(){
        $a = 5;

        global $b;

        static $c = 0;

        $a++;

        $b ++;

        $c++;

        echo "<p>ESCOPO LOCAL DE A: $a</p>";

        echo "<p>ESCOPO NA FUNÇÃO DE B: $b</p>";

        echo "<p>ESCOPO STATIC DE C: $c</p>";
    }
    echo "<p>ESCOPO GLOBAL DE A: $a</p>";
    echo "<p>ESCOPO GLOBAL DE B: $b</p>";

     escopoLoc();
     escopoLoc();
?>