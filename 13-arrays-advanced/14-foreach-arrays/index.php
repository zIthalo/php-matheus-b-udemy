<?php 
/*
    -Anteriormente vimos a estrutura foreache com arrays, podemos iterar facilmente com ela
    -Utilizando a notação de chave => valor, temos acesso rápido também a arrays associativos;
    -exemplo
    foreach($itens as $key => value){
        #code
    }

    #costumamos usar foreach para arrays associativos pois eles sempre têm alguma informação;
    -Elas são as chaves e os valores de cada chave deste array assoc
*/

$ithalo = [
  #  ↓key     ↓value    
    'nome' => 'Ithalo',
    'idade' => 26
];

$hemilly =[
    'nome' => 'Hemilly',
    'idade' => 25
];
#        ↓Meu arr    ↓key arr ↓valor key arr
foreach ($ithalo as $key => $value) {
    echo "$key => $value";
}
foreach ($hemilly as $key => $value) {
    echo "$key => $value";
}

?>