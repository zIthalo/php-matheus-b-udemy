<?php 

if (15 > 5 && "João" === "João") {
    echo "Deu bom 1<br>";
}

//esse if abaixo irá aparecer porque 'teste' é maior do que 5 pois tem mais caracteres e o 1 sozinho significa true, se tivesse um 0 não apareceria nada pois 0 sognifica false
if ('teste' > 5 && 1) {
    echo "Deu bom 2<br>";
}
if (2 == 3 && 5 >= 3) {
    echo 'Deu bom 3<br>';
}
?>