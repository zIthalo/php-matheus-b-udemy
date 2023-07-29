<?php 

/*
    -CRIAR UM ARRAY;
    -PREENCHER ESTE ARRAY(PODE SER COM LOOP);
    -CRIAR UMA FUNÇÃO QUE RETORNE OS NÚMEROS MAIORES QUE 7 DESTE ARRAY;

*/

$arr = [];

for ($i=0; $i <= 30; $i++) { 
    array_push($arr, $i);#essa func tem 2 parâmetros dentro de um for, você coloca no primeiro o array e no segundo o índice
}
echo "Meu ";
print_r($arr);
echo '<br>';

# Minha solução
function newArr(){
    global $arr;
    foreach ($arr as $i) {
        if ($i > 7) {
            echo "<p>Os índices maiores que 7 no meu Array $i </p>";
        }
    }
}
    newArr();
# - - - - - - - - - - - - - - - - - -

#Solução do prof
function arrayMaiorQueSete($ar){
    $arrayRetorno = [];
    for ($i=0; $i < count($ar); $i++) { 
        if($ar[$i] > 7){
            array_push($arrayRetorno, $ar[$i]);#Leitura dos parâmetros da func array_push: (o array que eu quero preencher, com o que eu quero preenchê-lo)
        }
        
    }
    return $arrayRetorno;
}
$novoArray = arrayMaiorQueSete($arr);
print_r($novoArray) ;
echo '<br>';
print_r(arrayMaiorQueSete($arr)); #posso imprimir assim também;

#echo arrayMaiorQueSete($arr); não posso fazer assim;



















// function arr(){
//     $arr = [3,1,20,80,8,9,7,55,66,133];
//     $arr2 = [];
//     foreach ($arr as $passo) {
//         if ($passo > 7) {
//             $arr2 = $passo;
//         }
//     }
//     print_r($arr2);
// }

//     arr();
?>