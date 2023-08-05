<?php 
/*
    -Com strstr() podemos encontrar um texto na str;
    -Será exibido o texto que vier após a str;
*/
    $nome = 'ithalo willian maximino da silva';
    echo '<br>';
    // echo strlen($nome);
   $restoDoNome = strstr($nome, 'willian');
    echo "$restoDoNome<br>";
?>