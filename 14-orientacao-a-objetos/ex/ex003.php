<?php 
/*

    -Crie uma classe Carro;
    -Crie algumas props e também a prop velocidadeMaxima;
    -Crie o método onde é possível alterar a velociade máxima do carro;
    -E também o getvelocidadeMaxima onde é possível imprimir a velocidade do carro;
*/

    class Carro {
        public $modelo;
        public $velocidadeMaxima;
        function setVelocidadeMaxima($var = 0){
           $var = $this->velocidadeMaxima;
            return $var;
        }
        function getVelocidadeMaxima(){
            return $this->setVelocidadeMaxima();
        }
    }
    $vw = new Carro;
    $vw->modelo = 'Gol';
    $vw->velocidadeMaxima = 200;
    $vw->setVelocidadeMaxima();
    echo "O Carro $vw->modelo tem a velocidade máxima de ".$vw->getVelocidadeMaxima().'km/h';
    echo "<br>";
    #segunda forma de fazer alterando a vel na função setVelocidadeMaxima; A forma correta;
    class Carro2{
        public $cor;
        public $velocidadeMaxima;
        function setVelocidadeMaxima($vel){
            $this->velocidadeMaxima = $vel;
        }
        function getVelocidadeMaxima(){
            return "A velocidade máxima deste carro é de $this->velocidadeMaxima km/h<br>";
        }
    }

    $gm = new Carro2;
    $gm->cor = 'Preta';
    $gm->setVelocidadeMaxima(150);
    echo $gm->getVelocidadeMaxima();
?>