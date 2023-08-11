<?php 
/*
    -As traits permitem o reuso do código sem hierarquia de classes, ou seja, sem herança;
    - Podemos assim utilizar os métodos da classe que foi feita a trait;
    - Utilizamos a palavra reservada use;
    - Exemplo;
        class Teste{
            use ClasseTrait;
        }

*/
// Assim é que se declara a trait↓ Antes eu declarei como classe mas dá erro porque o comando use só funciona com traits e não com classes;
// A mensagem de erro: Fatal error: Central cannot use Objeto - it is not a trait in C:\xampp\htdocs\php-matheus-b-udemy\14-orientacao-a-objetos\13-traits\index.php on line 17
trait Objeto {
    public function teste(){
        echo "Testando trait de objeto <br>";
    }
}
trait Testando {
    public $y=10;
    public function traitTeste(){
        echo "Este método é da trait Testando <br>";
    }
}
// o bom de trabalhar com traits é que eu posso inserir várias delas em classes
// As traits servem para colocar códigos pontuais dentro de classes para evitar de ficar uma classe herdando outra e outras e outras, e  o código ficar bagunçado, as vezes, determinadas classes nem precisariam herdar tantas coisas assim. Por isso que as traits caem como luvas, pois são pequenas e têm códigos pontuais para cada classe;
class Central {
    use Objeto;
    use Testando;
}

$x = new Central;

$x->teste();
$x->traitTeste();
echo "$x->y <br>";
?>