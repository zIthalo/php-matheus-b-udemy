<?php 
/*
    -Crie uma classe Cachorro com props;
    -Inicie as props via construtor;
    -crie um método para exibir cada uma das props que vocÇe criou;
*/
    class Cachorro {
        public $nome;
        public $raca;
        function __construct($nome, $raca){
            $this->nome = $nome;
            $this->raca = $raca;
        }
        function mostraResult(){
         echo "Nome do cachorro: " . $this->nome . '<br> ' .'Raça do cachorro: ' .$this->raca . '<br>';
        }
    }
    $bob = new Cachorro('Bob', 'Dálmata');
    $bob->mostraResult() . "<br>";

    // Posso preencher também com vars;
    $nome = 'Totó';
    $raca = 'Vira-lata';

    $toto = new Cachorro($nome, $raca);
    $toto->mostraResult();

?>