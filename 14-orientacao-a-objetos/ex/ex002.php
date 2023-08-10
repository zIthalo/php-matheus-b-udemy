<?php 
/*
    -Crie uma classe pessoa;
    -Crie a propriedade nome e idade;
    -E também o método andar;
*/
class Pessoa{
    public $nome;
    public $idade;
    function andar($nome, $passos){
        echo "$nome deu $passos passos";
    }
}
$ithalo = new Pessoa;
$ithalo->nome = 'Ithalo';
$ithalo->idade = 26;
echo "O nome dele é $ithalo->nome e tem $ithalo->idade anos<br>";
$ithalo->andar($ithalo->nome, 3);

?>