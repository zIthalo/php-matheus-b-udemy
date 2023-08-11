<?php 
/*
 -Aas interfaces criam um modelo de definição de uma classe;
 -Então toda classe que implementar uma interface, deverá implementar também suas propriedades e métodos, obrigatoriamente;
 -A palavra reservada é implements; (qunado é herança  a plavra é extends para interface implements)
 -Exemplo:
 class Humano implements Características;

*/
interface Caracteristicas {
    const NOME = 'Ithalo';
    public function falar(); 
}
// agora vou criar uma classe que implementa a interface
class Humano implements Caracteristicas{
    public $idade = 26;
// Se eu não criar a função falar aqui dará um erro pois ela fica sem uso;
public function falar(){
    echo "Olá, mundo!<br>";
}
// agora não tam mais erro pois eu criei a função
public function dizerNome(){
    echo "Meu nome é " . self::NOME . '<br>';
}
}
$ithalo = new Humano;
$ithalo->falar();
$ithalo->dizerNome();


?>