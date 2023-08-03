<?php 
#header('content-type: text/plain'); //Coloquei este header aqui para ver mais claramente os espaços em branco, já que o html automáticamente limpa os espaços.
/*
    trim = aparar
    -PODEMOS REMOVER OS ESPAÇOES EM BRANCO DE UMA STRING COM FUNÇÕES PHP;
    -trim - limpa espaços antes e depois da str;
    -ltrim -(left-trim) limpa espaços antes da str;
    -rtrim - (right-trim) limpa espaços depois da str;
    -desta forma conseguimos remover os espaços desnecessários inseridos pelos usuários;
*/

    $teste =  '          coloquei espaços antes e depois da str $teste                ' . 'z';
    $strLimpa = $teste;
    echo trim($strLimpa);
    //No HTML estes espaços já aparecerão limpos, porém no banco de dados esses espaços ficarão salvos, por isso, é interessante salvar strings com o trim para limpar todos espaços em branco desnecessários

?>