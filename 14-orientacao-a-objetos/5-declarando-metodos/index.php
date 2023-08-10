<?php 
/*
    -métodos são como funções

    -Para declarar um método vamos utilizar a sintaxe function, porém dentro de um class;
    -O restante é exatamente igual  a sintaxe de função;
    -podemos retornar ou imprimir dados, dependendo da nossa regra de negócios;
*/
    class Pessoa {
        function falar(){
            echo 'Olá, eu sou um objeto. <br>';
        }
        function somar($x =0, $y=0){
            echo $x + $y . "<br>";
        }
    }
    $ithalo = new Pessoa;
    #      ↓A setinha serve para chamar um método ↓ do objeto
    $ithalo->falar();

    $ithalo->somar(2,2);

    $alguem = new Pessoa;

    $alguem->somar(10,12);

    // ctrl + ; comenta linha/descomenta linha
    // ctrl + d - procura próxima ocorrência similar
    // ctrl + l seleciona uma linha inteira;
    // alt + z - fará você mudar o layout de quebra de linha
    // alt + numero - mudará as abas, isto é, alt + 1 (aba atual), alt + 2 (2º aba), alt + 3 (3° aba);
    // ctrl + tab - (tu já sabe);
    // ctrl + page down - (proxima aba);
    // ctrl + page up - (aba anterior);
    // ctrl + g - acessar linha/coluna ex: Vai abrir uma caixinha e você coloca :17 ← este comando vai acessar a linha 17


?>