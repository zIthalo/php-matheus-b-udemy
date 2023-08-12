<?php 
/*
    - O objeto DateTime permite tratar a data como um objeto;
    -Podemos passar um parâmetro que será a data criada, se não passarmos nada a data será a atual
    -Podemos exibir as informações do objeto com print_r;
    -Exemplo:
    $dataAtual = new DateTime();

*/
 $data = new DateTime();
 print_r($data);
 echo "<br>";
 
 //  echo $data->date . '<br>';
 //  echo $data['date'] . '<br>';
 // Não consigo acessar as propriedades e nem uma indexação array desta forma, por mais que no print r me mostre índices e propriedades mas existe uma forma de acessar:

?>