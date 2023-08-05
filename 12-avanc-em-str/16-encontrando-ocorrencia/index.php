<?php 
/*
 - COM A FUNÇÃO strpos() PODEMOS ENCONTRAR ALGUM TEXTO NA STR;
 - SE RECEBERMOS ALGUM VALOR É QUE O TEXTO FOI ENCONTRADO E ESTE VALOR É O ÍNDICE INICIAL;
 - SE FOR RETORNADO FALSE O TEXTO NÃO ESTÁ NA STR;
*/
    $str = 'Ithalo Willian Maximino da Silva';
    $maximino = strpos($str, 'Maximino'); #primeiro se coloca a var de str que você quer achar algum texto e depois coloque o texto ou palávra e a função retornará o índice em que esta palavra ou texto se encontra;
    
    echo "$maximino <br>"; #aqui vai sair o índice da palavra

    $java = strpos($str, 'java');

    if ($java === false) {
        echo 'Esta palavra não foi encontrada <br>';
    }

    $willian = 'Willian';

    echo strpos($str, $willian);#procurando usando variáveis
    echo '<br>';

    #ainda podemos procurar um pedaço da str, ou seja, dentro do nome willian podemos encontrar a parte lian;

    $lian = 'lian';

    echo strpos($str, $lian);#no índice 10;


?>