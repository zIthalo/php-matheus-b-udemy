<?php 
// Para checar a ancestralidade de uma classe utilizamos o operador instanceof;
// Podemos inserir essa operação em um if, pois vai retornar um booleano;
// Exemplo:
// $objeto instanceof Humano

class Humano {

}
class Animal{

}
class Professor extends Humano{

}
$pedro = new Professor;
$marcos = new Humano;
$toto = new Animal;
// Se o objeto marcos pertencer a classe Humano
if ($marcos instanceof Humano) {
    echo "Marcos é um Humano<br>";
}
if ($marcos instanceof Animal) {
    echo "Marcos é um animal <br>";
} else {
    echo "Marcos não é um animal <br>";
}

if ($toto instanceof Animal) {
    echo "Totó é um animal<br>";
}
// Isso aqui é mais uma prova de que classes que herdam outras classes também fazem parte da classe pai
if ($pedro instanceof Humano) {
    echo "Pedro é Humano<br>";# Esta é a saída
} else {
    echo "Pedro não é humano<br>";
}

?>