<?php 
/*
    -Crie uma classe Humano com algumas props e o método falar;
    -Crie outra classe Professor que herda de humano, crie também as props e métodos particulares desta classe;
    -Exiba os valores das props da classe pai e também utilize métodos;

*/

class Humano {
    private $braços = 2;
    private $pernas = 2;
    private $boca = 'Oi! <br>';
    // para poder printar um método com uma prop private eu tenho que inicializá-la com algum valor. Como eu não tinha inicializado-a antes não tinha aparecido nenhum valor na tela mesmo que eu tenha utilizado esta sintaxe return $this->boca = 'Oi!';
    public function falar(){
        return $this->boca;
    }

}
class Professor extends Humano{

}
$ze = new Humano;
$zo = new Professor;

echo $ze->falar() . '<br>';
echo $zo->falar() . '<br>';


?>