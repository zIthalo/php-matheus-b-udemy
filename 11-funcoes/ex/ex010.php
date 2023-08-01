<?php 

/*
    -crie uma func que recebe um array de itens de supermercado
    -retorne este array em formato de string separadas por vírgula
*/

function superMarketItens($arr){
    if (is_array($arr)) {
        return implode(', ',$arr);
    }else {
        return "ERRO: Você deve inserir um array dentro do parâmetro";
    }
}
$carrinhoDeCompras = ['maçã', 'feijão', 'arroz', 'macarrão', 'bife'];
echo superMarketItens($carrinhoDeCompras);
?>