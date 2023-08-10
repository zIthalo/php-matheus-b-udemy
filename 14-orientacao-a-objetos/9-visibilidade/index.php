<?php 
/*
    -Temos três formatos de visibilidade: public, protected e private;
    
    -public: A propriedade ou método pode ser acessada de qualquer forma;
    
    -protected: A prop ou método pode ser acessada apenas pela classe de origem ou as que recebam a mesma de herança;
    
    -private: a prop ou método pode ser acessada apenas pela classe que foi criada;

*/

use Car as GlobalCar;

 class Car{
    public $rodas = 4;
    public $vidro = 'Sem película';
 }
 class Car2{
    public $rodas = 4;
    private $vidro = 'Sem película';
    protected $portas = 4;
    public function getVidro(){
       return $this->vidro;
    }
    public function getPortas(){
        return $this->portas;
    }
 }
class Mecanico {
    public function alterarRodas($obj){
        $obj->rodas = 10;
    }
    public function colocarPelicula($obj, $pelicula){
        $obj->vidro = $pelicula;
    }
}
//  ↓carro agora é um objeto
 $carro = new Car;
 echo $carro->rodas . '<br>';

//  ↓Ithalo agora é um objeto
 $ithalo = new Mecanico;
// já que o carro recebeu o valor 4 das rodas da classe car
 $ithalo->alterarRodas($carro);
//  passando pela função o valor será reatribuído e agora valerá 10. Isso acontece porque a prop rodas da classe Car é public
echo $carro->rodas . '<br>';
// Saída: 10
echo $carro->vidro . '<br>';
//                      ↓obj      ↓pelicula
$ithalo->colocarPelicula($carro, 'G25');
echo $carro->vidro . '<br>';

$car = new Car2;

$willian = new Mecanico; 

echo $car->getVidro() .  '<br>';
// $car->vidro = 'teste'; não consigo fazer isso pois a prop vidro é private;

// echo $car->portas . '<br>';Não posso acessar ou alterar pois a prop é do tipo protected
// só vou conseguir acessar por uma public function dentro da própria classe Car 2

echo $car->getPortas() . '<br>';
?>