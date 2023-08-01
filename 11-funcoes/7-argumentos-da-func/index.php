<?php 
/*
    -NO PHP TEMOS DUAS FUNÇÕES INTERESSANTES PARA APRENDER MAIS SOBRE FUNÇÕES;
    -func_get_arg = RETORNA UMA LISTA COM OS ARGUMENTOS DE UMA FUNÇÃO;
    -func_num_args = RETORNA O NÚMERO DE ARGUMENTOS DE UMA FUNÇÃO;

*/

    function soma($a=0, $b=0){
        echo 'Números que preencheram os parâmetros: ';
        print_r(func_get_args());#mostrará os argumentos passados nos meus parâmetros
        echo '<br>';
        echo 'Quantidade de argumentos passados aos parâmetros: ';
        print_r(func_num_args());//mostrando quantos argumentos eu passei para os parâmetros
        echo '<br>';
        return '<p> A soma dos valores é igual a: ' . $a + $b . '</p>';
    }
    
    echo soma(2,4);
    
?>