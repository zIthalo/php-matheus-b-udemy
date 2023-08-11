<?php 
/*
    -As classes anonimas são criadas em uma var e não possuem nome;
    -Elas funcionam como qualquer outra classe;
    -Precisamos fechar ela com ";"
    -Ex
        $anon = new class(){};

*/
    // é um recurso legal porém não muito utilizado
    $anonima = new class(){
        public $nome = "Ithalo";
        public function dizerNome(){
            echo "Olá! Meu nome é $this->nome";
        }
    };
    // para chamar:
    echo $anonima->nome. '<br>';
    $anonima->dizerNome() . '<br>';
    // classes anonimas não fazem herança;
    
?>