<?php 
function calcularDesconto($val, $cat){
   
    if(is_numeric($val) && is_string($cat)){
    switch ($cat) {
        case 'eletrônicos':
            $desc = $val / 100 * 10;
            echo "<h2>Eletônicos em PROMO!!!<br> O valor do produto era R$$val,00 com o desconto, de 10%, passa a ser R$".$val-$desc.",00</h2>";
            break;
        case 'vestuário':
            $desc = $val / 100 * 20;
            echo "<h2>Vestuário em PROMO!!!<br> O valor do produto era R$$val,00 com o desconto, de 20%, passa a ser R$".$val-$desc.",00</h2>";
            break;
        case 'alimentos':
            $desc = $val / 100 * 5;
            echo "<h2>Alimentos em PROMO!!!<br> O valor do produto era R$$val,00 com o desconto, de 5%, passa a ser R$".$val-$desc.",00</h2>";
            break;
        default:
           echo "Categoria fora da promo :/. O valor do produto é $val";
            break;
    }
} else {
    echo "<h1>ERRO: Dados inseridos inválidos. <br>Digite o valor do produto, em números, e a categoria.</h1>";
}
}

calcularDesconto(30, "eletrônicos");
?>