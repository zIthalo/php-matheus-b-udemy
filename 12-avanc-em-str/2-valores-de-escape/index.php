<?php 
header('content-type: text/plain');#TRADUZINDO: TIPO DO CONTEÚDO EM TEXTO, PHP, PURO.
/*
    -PODEMOS UTILIZAR ALGUNS VALORES QUE EXECUTAM FUNÇÕES ESPECIAIS EM STRINGS;
    -PRECISAMOS UTILIZAR ASPAS DUPLAS;
    -EXEMPLOS "\n" - NOVA LINHA;
    - "\t" - TAB;
    - "\\" - BARRA INVERTIDA;
    - "\$" sinal de dólar;
    - SE QUISER APRENDER TODOS PROCURE NO GOOGLE ESCAPE STRINGS PHP;
*/


echo "Testando \ntudo  \n \tao mesmo \\ tempo \$"; //MEUS \N NÃO FUNCIONAM PORQUE EU TENHO QUE COLOCAR UM HEADER LÁ EM CIMA PARA QUE O PHP OS RECONHEÇA, USAR O BR, NESTE CASO, É MELHOR POIS NÃO PRECISA DE BUROCRACIA. NÃO IMPRIME PORQUE ISSO É MANDADO EM FORMATO HTML, SE FOSSE EM UM TERMINAL PHP ELE IMPRIMIRIA NORMALMENTE. O HEADER, ANTERIORMENTE MENCIONADO SERVIRÁ PARA TRANSFORMAR ESTA SAÍDA EM TEXTO PHP PURO.

?>