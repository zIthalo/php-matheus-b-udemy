<?php 
/*
    -O $this se refere a instância(criação) atual do objeto;
    -Podendo assim alterar um valor de uma propriedade do objeto com:$this->propriedade = "x";
    -Tradução literal = este/esta
    -Podemos invocar um método do objeto com $this também;
*/

class Animal{
    public $nome;
    function escolherNome($nome){
        $this->nome = $nome;
    }
    // Não apenas se referir a uma propriedade o $this também pode se referir a um método dentro de outro método confira:
    function latir(){
        return "Au au <br>";
    }
    // A lógica foi: Como eu já tenho um método de latir e eu quero criar outro com o latido forte, eu referêncio o latido normal mas convertido com a function strtoupper($this[esta função deste objeto]->latir());
    function latirForte(){
        return strtoupper($this->latir()) ."<br>";
    }
    // A referência this é ao proprio objeto que está sendo usado;
}
$frida = new Animal;
echo "O nome do animal é: $frida->nome <br>";
$frida->escolherNome("Frida");
echo "O nome do animal é: $frida->nome <br>";
echo $frida->latir();
echo $frida->latirForte();



?>