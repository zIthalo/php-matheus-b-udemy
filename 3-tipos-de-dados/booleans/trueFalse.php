<?php 
#falsy values em php - 0, 0.0, "0", [], NULL

if (true) {
    echo 'Esta linha rodará';
}

$podeEntrar = true;

if ($podeEntrar) {
    echo 'O usuário pode entrar';
}

echo true; #irá printar o número 1 na tela
echo '<br>';
echo false; #Não aparecerá nenhum valor
?>