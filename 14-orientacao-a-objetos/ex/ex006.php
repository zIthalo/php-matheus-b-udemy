<?php 
/*
    - Crie uma classe chamada Calculadora que tenha os seguintes métodos:

    - somar(a, b): recebe dois números como parâmetros e retorna a soma deles.

    - subtrair(a, b): recebe dois números como parâmetros e retorna a subtração do segundo número do primeiro.

    - multiplicar(a, b): recebe dois números como parâmetros e retorna a multiplicação deles.

    - dividir(a, b): recebe dois números como parâmetros e retorna a divisão do primeiro número pelo segundo.

*/

class Calculadora {
    public $a;
    public $b;
    public function somar($a = 0, $b = 0){
        return $a + $b;
    }
    public function subtrair($a = 0, $b = 0){
        return $a - $b;
        
    }
    public function multiplicar($a = 0, $b = 0){
        return $a * $b;
        
    }
    public function dividir($a = 0, $b = 0){
        return $a / $b;

    }
}

$calc = new Calculadora;
echo $calc->somar(2,2);
echo '<br>';
echo $calc->subtrair(2,2);
echo '<br>';
echo $calc->multiplicar(2,2);
echo '<br>';
echo $calc->dividir(2,2);
echo '<br>';
?>