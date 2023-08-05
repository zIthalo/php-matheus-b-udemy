<?php 
/*
    -Assim como no Js no php também temos a função array_slice que pega um pedaço do array
    -Ela funciona assim: array_slice($oArray, índice inicial, quantos elementos eu quero resgatar apartir do índice, ou seja, até que índice eu quero);
    -Vejamos na prática ↓↓
*/
$carro = ['jaguar', 3.0, 'azul', 'teto solar', 'automático'];
print_r(array_slice($carro, 2, 3));#do índice 2 ao índice 4, o que foi feito aqui foi o seguinte: pega o primeiro índice que você quer e somei mais 3 índices incluindo o índice 2, qualquer dúvida é só contar quantos índices têm do azul até automático
echo '<br>';

$slice = array_slice($carro, 1);#se eu colocar só um parâmetro essa função vai pegar do valor que eu selecionei até o final do arr
print_r($slice);
echo '<br>';
#fazendo com params negativos:
$slice1 = array_slice($carro, 1, -2);#como funciona índices negativos? Depois dessa eu aprendi que é assim: você primeiro digita o índice que você quer que no caso foi 1, e depois você digita quantos elementos você quer subtrair, no caso eu quis subtrair 2 elementos. Fazendo isso só me sobrou o índice que eu digitei e o índice após ele, se eu digitasse -3 só ficaria o meu índice. Essa subtração é feita de trás para frente, isto é, eu removi 'automático' e 'teto solar';

print_r($slice1);
?>