<?php 
/*
    -Para declarar propriedades vamos vasicamente criar uma variável dentro de uma class;
    -Porém precisamos definir sua privacidade, como por exemplo public;
    -Uma propriedade pública pode ser acessada fora do escopo do objeto;
    Exemplo:
    public $idade = 29;
*/

 class Car{
    // se eu quiser posso também inicializar essas propriedades sem valor atribuído, para atribuir depois no meu código
    public $rodas = 4;
    public $aro = 20;
    public $cor = 'Vermelha <br>';# cor padrão
    // posso ter métodos e propriedades ao mesmo tempo, eles não dão conflito;
    function ligar($car = 'O carro'){
        echo "$car ligou <br>";
    }
 }
// da mesma forma que eu chamo um método da classe eu também chamo uma propriedade ($var)
$ferrari = new Car;
echo $ferrari->aro . '<br>';
echo $ferrari->rodas . '<br>';
// se eu quiser alterar o valor da propriedade eu faço assim;
echo $ferrari->cor = 'Laranja <br>'; # cor alterada
echo $ferrari->ligar('A ferrari');
?>