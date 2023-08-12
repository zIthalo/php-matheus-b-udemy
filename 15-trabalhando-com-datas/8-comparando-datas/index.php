<?php 
/*
    -Datas que foram criadas com o objeto de DateTime podem ser comparadas utilizando os operadores de comparação
    - Estes são: >,< ou ==;
    - Exemplo:
    $dataA > $dataB;
*/
$dataA = new DateTime();
$dataB = new DateTime();
$dataC = new DateTime();
// Este erro: Invalid numeric literal, estava ocorrendo porque coloquei um 0 na frente do mês que é 9
// Ou também para não dar erro eu posso fazer  a declaração assim: $dataB->setDate(2016,'09',19); tudo que tiver um zero a esquerda eu coloco como STR '' ou "";
# Só igualando com setDate e setTime é que eu consigo fazer uma data ser idêntica a aoutra
$dataB->setDate(2016,9,19);
$dataB->setTime(14,30,10);
$dataC->setDate(2016,9,19);
$dataC->setTime(14,30,10);
print_r($dataB);
echo '<br>';



if ($dataA > $dataB) {
    echo "A data A é maior que a data B <br>";
}
if ($dataB < $dataA) {
    echo "A data B é menor que a data A <br>";
}
// Se eu não fizer um set date e um set time nas datas este bloco nunca será impresso ↓
if ($dataC == $dataB) {
    echo "As datas são iguais <br>";
}

?>