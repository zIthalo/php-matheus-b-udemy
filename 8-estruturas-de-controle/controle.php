<?php 
/*Temos estruturas if else neste módulo até agora nenhuma novidade (aula 4);*/

#if aninhado

if (5 > 1) {
    echo 'Entrei no ninho <br>';
    if (3 < 5) {
        echo 'Estou no meio do ninho <br>';
        if (2 > 2) {
            echo 'chegamos ao fim do ninho <br>';
        }else {
            echo 'Estamos no else do fim do ninho <br>';
        }
    }
}
#↑ esta estrutura não é muito utilizada já que poderíamos fazer essas comparações com operadores lógicos como o || ou &&

/*
Nessa sessão também aprendemos o if com else e if, else if e else.
*/
?>