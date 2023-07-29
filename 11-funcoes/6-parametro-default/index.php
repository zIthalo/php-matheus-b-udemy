<?php 
/*
    -PARÂMETROS DEFAULT;;
    -PODEMOS PASSAR PARÂMETROS COM VALORES PRÉ-DETERMINADOS;
    -ENTÃO CASO NÃO ENTRE UM VALOR NO PARÂMETRO, O VALOR DEFAULT ENTRARÁ EM CENA;
    -A FUNÇÃO SERÁ EXECUTADA NORMALMENTE COM O VALOR DEFINIDO;
        -EX:
            function teste($a = 'padrão'){
                //código
            }
*/
function soma($a = 0, $b = 0){
    return "<p> A soma dos valores é igual a: " . $a + $b . "</p>";
}
echo soma(15, 15);

#function com dois parâmetros mas somente um com valor default;

function testando($a = 'X', $b){
    return "O valor de a = $a <br>O valor de b = $b";
}

echo testando(0,3);# se não passar dois argumentos dará um erro, o mais correto, neste caso seria passar os valores default por último, isto é

/*
    -EX:
    function testando($a, $b='X'){
        //code
    }
    com isso se eu passar somente um valor ex: echo testando('1'); não terá um fatal error pois o parâmetro com valor default está por último;
*/
?>