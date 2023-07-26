<?php 

/*
- A ESTRUTURA FOR É COM CERTEZA A ESTRUTURA DE REPETIÇÃO MAIS UTILIZADA;

- SUA SINTAXE É MAIS ORGANIZADA, EM APENAS UMA LINHA E APARENTA SER MAIS DIFÍCIL AO PRIMEIRO OLHAR;

- EX;

    for($contador; (condicão) $contador < 10; $contador++){
            CÓDIGO
    }
*/

 for ($i=0; $i < 10; $i++) { 

    if ($i ==2) {
        echo "Ithalo <br>";
    }
    if ($i == 8) {
        break;
    }
    if ($i == 6) {
        continue;
    }
    echo " Passo: $i <br>";
 }
?>