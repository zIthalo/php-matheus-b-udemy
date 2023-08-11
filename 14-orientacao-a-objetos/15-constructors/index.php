<?php 
/*
    -Pelos construtores podemos inicializar objetos com valores de propriedades únicos para cada objeto;
    -Passamos como argumentos os valores das propriedades;
    -Exemplo:
            ↓ tem que colocar um espaço, 2x _ e a palavra construct
    function __construct($portas,$motor,$teto_solar){
        
    }

    a function __construct serve, também para poluir menos o código na criação de uma classe
*/
    class Car {
        public $portas;
        public $cor;
        public $marca;
        //                  ↓Aqui são parâmetros que receberão o valor das props acima mas não são as props de fato
        function __construct($portas, $cor, $marca){
            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;
        }
        
    }
    // outro ponto positivo da __construct é que eu posso colocar os dados da classe já na instanciação do objeto

    $ferrari = new Car(4, "Vermelha", "Ferrari");
    echo "Marca: $ferrari->marca <br>";
    echo "Cor: $ferrari->cor <br>";
    echo "Quantidade de portas: $ferrari->portas <br>";
    
    // a function __construct(), serve para ir adicionando os conteúdos de forma que os usuários o façam  e não através do programador
    
    $bmw = new Car(4, "Branca", "BMW");
    echo "Marca: $bmw->marca <br>";
    echo "Cor: $bmw->cor <br>";
    echo "Quantidade de portas: $bmw->portas <br>";
?>