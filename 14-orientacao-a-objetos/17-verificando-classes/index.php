<?php 
/*
    -Em PHP temos alguns métodos que nos ajudam a entender as classes;
    -class_exists() => verifica se uma classe existe;
    -get_class_methods() => verifica os métodos de uma classe;
    get_class_vars() => mapeamento das props  de uma classe;

*/
 class Humano {
    public $idade;
    public $nome;
    public $profissao;
    public function falarDados(){
        echo "$this->nome $this->idade $this->profissao";
    }
    public function andar(){}
 }
 $ithalo = new Humano;
 $ithalo->nome = "Ithalo";
 $ithalo->idade = 26;
 $ithalo->profissao = "Programador PHP";

 if (class_exists("Humano")) {
    echo 'A classe existe. <br>';
}else {
     echo 'A classe não existe. <br>';
    
 }
 if (class_exists("Dog")) {
    echo 'A classe existe. <br>';
}else {
     echo 'A classe não existe. <br>';
    
 }
//  para mostrar todas as props criadas ↓
print_r(get_class_vars("Humano"));
echo '<br>';
//  para mostrar todos os métodos criados ↓
 print_r(get_class_methods("Humano"));
 echo '<br>';
// mostrando um dos métodos ↓
 echo $ithalo->falarDados();
 echo '<br>';
?>