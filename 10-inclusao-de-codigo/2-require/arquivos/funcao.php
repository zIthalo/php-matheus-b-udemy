<?php 

$idade = 12;

echo "A idade é $idade <br>";
#diretório atual ↓  ↓concat  ↓↓↓↓comando para voltar pastas ↓arquivo desejado
    include __DIR__ .       "/../                           testando.php";
    #para eu voltar uma pasta e acessar outro arquivo eu preciso fazer esta estrutura acima para não dar bug, o __DIR__ significa meu diretório e dentro das aspas eu coloco o /../ para chamar o arquivo correto e concateno com .

?>