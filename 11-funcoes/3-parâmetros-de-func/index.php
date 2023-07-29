<?php 
/*
    -PODEMOS PASSAR PARÂMETROS PARA A FUNÇÃO;
    -ESTES PARÂMETROS SÃO COMO VARIÁVEIS, QUE SÃO UTILIZADOS DENTRO DA FUNÇÃO PARA MOLDAR SUA EXECUÇÃO;
    - NÃO HÁ NÚMERO MÁXIMO DE PARÂMETROS;
    -EX.
     function teste($param, $param2){
        //code
     }

*/

     function velMax($carName,$vel){
        if (is_string($carName) && is_numeric($vel)){
            echo "O $carName atinge a velocidade máxima de $vel km/h <br>";
        }else{
            echo "ERRO: Por favor insira ('nome-do-veículo', velocidade-em-números) <br>";
        }
     }
     
     $gol1000 = 168;

     echo velMax('Gol 1.0', $gol1000);

     #Não posso executar funções que exigem parâmetros sem inserir os mesmos pois isso dará um fatal error no meu código e não exibirá mais nada que vier após ele
     #velMax();

     #Se a minha func só exige um parâmetro e eu passo mais de um parâmetro o php não reconhecerá como um erro, ele só não exibirá o outro parâmetro que eu inseri
     # velMax(1,3,'sdff','sadasdsa');
     #se minha func tem dois parâmetros e eu só passo um também vou receber um fatal error

?>