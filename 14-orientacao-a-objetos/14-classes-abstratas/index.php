<?php 
/*
    -As classes abstratas não podem ser instanciadas;
    -Podemos ter metodos abstratos, que devem ser implementados obrigatoriamente se uma classe herdar a abstrata;
    -A palavra reservada tanto para classes como para métodos é abstract;
    -Ex
    abstract class ClasseAbstrata{

    }
*/
abstract class Teste {
    public static function testandoClasse(){
        echo "Este método é de uma classe abstrata <br>";
    }
    // método abstrato:
    abstract public function testeAbs();
}
// $o = new Teste;
// $o->testandoClasse();
// mensagem de erro porcausa que eu não posso instanciar classes abstratas
//Fatal error: Uncaught Error: Cannot instantiate abstract class Teste in C:\xampp\htdocs\php-matheus-b-udemy\14-orientacao-a-objetos\14-classes-abstratas\index.php:16 Stack trace: #0 {main} thrown in C:\xampp\htdocs\php-matheus-b-udemy\14-orientacao-a-objetos\14-classes-abstratas\index.php on line 16

// Para utilizar o método que está dentro da classe abstract, vou chama-lo direto;

// Quando eu tentei chamar somente assim, sem colocar em um objeto, o vs code reclamou pois esse método não é do tipo static, então foi preciso eu ir no método e colocá-lo como public static function
// Teste::testandoClasse();
Teste::testandoClasse();
// Classes abstratas só podem ser chamadas sem serem instanciadas;

// Criando uma classe que herda a classe abstrata;
// class Nova extends Teste {

// }
// $n = new Nova;
// $n->testeAbs();
// Criando a classe Nova que herda a classe Teste, com um método abstrato sem ser inicializado na classe Nova aparece a seguinte mensagem de erro: 
// Fatal error: Class Nova contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Teste::testeAbs) in C:\xampp\htdocs\php-matheus-b-udemy\14-orientacao-a-objetos\14-classes-abstratas\index.php on line 31

class Nova extends Teste {
    // para poder usar o método testeAbs() eu precisei redeclará-lo na classe Nova
    public function testeAbs(){
        echo "Teste método abstrato";
    }
}
$n = new Nova;
$n->testeAbs();
?>