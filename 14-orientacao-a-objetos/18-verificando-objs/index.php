<?php
/*
    -Em PHP temos alguns métodos que nos ajudam a entender melhor os objs;
    - is_object() => verifica se uma var é um obj;
    - get_class() => verifica a classe de um obj;
    - method_exists() => verifica se um método existe em um obj;
*/

class Humano {
    public $nome;
    public $idade;
    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function andar(){}
}
$ithalo = new Humano('Ithalo', 26);
if (is_object($ithalo)) {
    echo "A var \$ithalo é um objeto.<br>";
}else {
    echo "A var \$ithalo não é um objeto.<br>";
}
#pode ser impresso em um echo, veja:
print_r(get_class($ithalo));
echo '<br>';
echo get_class($ithalo) . ' este veio do echo.<br>';

//                  Como 2º argumento eu tenho que passar o nome do método
if (method_exists($ithalo, "andar")) {
    echo "Existe método.<br>";
} else {
    echo "Não existe método.<br>";
}
if (method_exists($ithalo, "falar")) {
    echo "Existe método.<br>";
} else {
    echo "Não existe método.<br>";
}
echo '<br>';
?>