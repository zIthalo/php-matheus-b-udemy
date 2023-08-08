<?php 
/*
    -Para ordenar em ordem reversa pelo valor das chaves,('chave' => 'valor'), podemos utilizar a função arsort();

    -Se quisermos ordenar o array pelas chaves, utilizamos o valor ksort();
*/

    $eu = [
    #   ↓chave      ↓valor
    'nome' => 'ithalo',
    'idade' => 25,
    'profissão' => 'programador'
];
arsort($eu); #organiza por ordem reversa alfabética ou numérica os valores
print_r($eu);
#Saída: Array ( [profissão] => programador [nome] => ithalo [idade] => 25 )
echo '<br>';

$eu2 = [
    #   ↓chave      ↓valor
        'nome' => 'ithalo',
        'idade' => 25,
        'profissão' => 'programador'
    ];
    asort($eu2);
    print_r($eu2);
    #Saída: Array ( [idade] => 25 [nome] => ithalo [profissão] => programador )
    echo '<br>';
    
    
    $eu3 = [
        #   ↓chave      ↓valor
            'nome' => 'ithalo',
            'idade' => 25,
            'profissão' => 'programador'
        ];
        
    ksort($eu3);#organiza por ordem alfabética ou numérica os chaves
    print_r($eu3);
    #Saída: Array ( [idade] => 25 [nome] => ithalo [profissão] => programador )
    echo '<br>';

    $eu4 = [
        #   ↓chave      ↓valor
            'nome' => 'ithalo',
            'idade' => 25,
            'profissão' => 'programador'
        ];
        
    krsort($eu4);#organiza por ordem decrescente alfabética ou numérica os chaves
    print_r($eu4);
    #Saída: Array ( [profissão] => programador [nome] => ithalo [idade] => 25 )
    echo '<br>';

?>