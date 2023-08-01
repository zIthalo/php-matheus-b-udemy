<?php 

/* 
    -PARA RETORNAR MÚLTIPLOS VALORES EU POSSO JOGAR UM ARRAY APÓS O RETURN DA FUNÇÃO COM O VALOR DOS PARÂMETROS
*/
function alteraDados($nome, $idade){
    $nome = "Sr. $nome ";
    $idade = "$idade anos. <br>";

    return [$nome, $idade];
}

$dados = alteraDados('Ithalo', 26);

#echo $dados;//não funciona com echo
print_r($dados);//Mostrará o array;
#com o echo eu posso fazer assim:
echo "Olá, $dados[0]! Você tem $dados[1]";
?>