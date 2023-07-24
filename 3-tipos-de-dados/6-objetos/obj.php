<?php 

class Pessoa{
    //isto é um método do objeto
    function falar(){
        echo 'Olá, pessoas!';
    }
};

//aqui a minha var recebe o molde e as funções do objeto pessoa
$ithalo = new Pessoa();

//aqui eu estou adicionando uma nova propriedade ao objeto
#$ithalo->nome = 'Ithalo';

//Aqui eu peço para imprimir o conteúdo da propriedade nome do meu objeto
#echo $ithalo->nome. "<br>";

//aqui eu estou chamando o método do meu objeto
$ithalo->falar();
//as setas -> servem para acessar uma propriedade, criar uma propriedade e acessar um método de um objeto

//Depois retirar os # para ver o código rodar

?>