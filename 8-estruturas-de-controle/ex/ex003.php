<?php 

$idade = 15;
$idade2 = 18;
$maioridade = 18;
$msg = "Este usuário é de maior <br>";
$msgEl = "Este usuário é menor de idade <br>";
if ($idade >= $maioridade) {
    echo $msg;
}else {
    echo $msgEl;
}

if ($idade2 >= $maioridade) {
    echo $msg;
}else {
    echo $msgEl;
}
?>