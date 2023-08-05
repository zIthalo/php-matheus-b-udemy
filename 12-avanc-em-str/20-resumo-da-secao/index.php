<?php 
/*
    Resumo:
     
     Nesta seção aprendemos:
     
     -Interpolação de strs, ex: echo "Meu nome é $nome";

     -Valores de escape, ex: echo "\n \\ \$"; isso faz com que cada valor possa aparecer colocando na frente do mesmo a contra barra \ e com o header("content-type: text/plain"); aprendemos que a gente pode mudar o site de estilo-site para estilo-código-php;

     -aprendemos sobre a função print() que tem o mesmo resultado de echo;

     -Aprendemos a função antiga printf() que serve para interpolar valores ex: printf("Tenho %d anos", $idade);{
        -Legenda
        %d - inteiro;
        %s - string;
        %f - float;
        %.2f - float com duas casas após o .;
    }

    -Aprendemos a função strlen() que serve para falar a quantidade de índices da minha str;

    -Aprendemos sobre percorrer cada caracter de uma str exemplo{
    $nome = "Ithalo";
    $count = 1;
    for ($i=0; $i < strlen($nome); $i++) { 
        echo "$count - $nome[$i]<br>";
        $count++;
    }
    -Saída
    1-I
    2-t
    3-h
    4-a
    5-l
    6-o
    }

    -Apredi como limpar espaços desnecessários de strs com a função trim(){
        -legenda:
    
    -trim - limpa espaços antes e depois da str;
    -ltrim -(left-trim) limpa espaços antes da str;
    -rtrim - (right-trim) limpa espaços depois da str;
    -desta forma conseguimos remover os espaços desnecessários inseridos pelos usuários;
    ex:
    $teste =  '          coloquei espaços antes e depois da str $teste                ' . 'z';
    $strLimpa = $teste;
    echo trim($strLimpa);
    
    #saída de como ficaria se fosse salvar isto no Banco de dados:

    $teste =  'coloquei espaços antes e depois da str $teste' . 'z';

    }

    -Aprendi a alterar o case das strs com{
         -strtolower($var); Altera todos os caracteres da str para minúsculas 
         -strtoupper($var); Altera todos os caracteres para maiúsculas
    }
    
    -Aprendi a Alterar o Case Das Palavras com ucfirst($var); ucwords($var);

    -Aprendi a remover tags de strs com strip_tags(var);

    -Aprendi a resgatar uma palavra de uma str com substring($var, índiceInicial,índiceFinal);

    -Aprendi a colocar uma str de trás para frente com strrev($alfabeto); usei o alfabeto de ex;

    -Aprendi a repetir str com str_repeat($var, quantasVezesVouRepetir);

    -Aprendi a transformar de str para array com explode(' '[<-separador de índices], $var);

    -Aprendi a transformar de array para str com implode(', '[<-separador de índices],$arr);

    -Aprendi a encontrar o índice de uma palavra específica em uma str com strpos($var, 'A palavra que eu quero saber o índice');

    -Aprendi a encontrar o último índice de de uma palavra específica em uma str com strrpos($var, 'A palavra que eu quero saber o último índice');

    -Aprendi a imprimir o resto de uma str com base na palavra que eu achar com strstr($var, 'Palavra que apartir dela vou imprimir o resto da str');

    -Aprendi a decompor uma url, transformando-a em um arr para obter informações dela com parse_url($varQueContenhaUmaUrl) com print_(parse_url($varQueContenhaUmaUrl)) eu exibo a dita cuja;

    -------------------------------------------------------- fim da seção --------------------------------------------------------


*/


?>