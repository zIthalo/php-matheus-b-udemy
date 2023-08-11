<?php 
/*
    -Crie uma classe chamada Passenger que represente um passageiro.

    -A classe Passenger deve ter os seguintes atributos:

    -name: nome do passageiro.

    -age: idade do passageiro.

    -seatNumber: número do assento do passageiro.

    -A classe Passenger deve ter os seguintes métodos:

    -getName(): retorna o nome do passageiro.

    -getAge(): retorna a idade do passageiro.

    -getSeatNumber(): retorna o número do assento do passageiro.

    -setSeatNumber($seatNumber): atualiza o número do assento do passageiro.



*/
class Passenger {
    public $name;
    public $age;
    public $seatNumber;
    public function getName(){
        return "Nome: ". $this->name;
    }
    public function getAge(){
        return "Idade: " . $this->age;
        
    }
    public function getSeatNumber(){
        return "Número do assento: " .$this->seatNumber;

    }
    public function setSeatNumber($seatNumber){
        return $this->seatNumber = $seatNumber;
    }
}

$ithalo = new Passenger;
$ithalo->name = 'Ithalo';
$ithalo->age = 26;
$ithalo->seatNumber = 10;
echo $ithalo->getName() . '<br>';
echo $ithalo->getAge() . '<br>';
echo $ithalo->getSeatNumber() . '<br>';
$newSeatNumber = 12;
$ithalo->setSeatNumber($newSeatNumber);
echo $ithalo->getSeatNumber() . '<br>';

?>