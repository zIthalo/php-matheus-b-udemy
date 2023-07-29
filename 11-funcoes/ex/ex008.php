<?php 

/*
    -EXERCÍCIO COM FUNCTIONS DE PARAMS COM VALOR DEFAULT;
    -CRIAR FUNÇÃO CHAMADA DEFINE COR DE CARRO;
    -ELA TERÁ UM PARAM DEFAULT CHAMADO COR E COM O VALOR VERMELHA;
    -RETORNE A COR DO CARRO;
    -RETORNE TANTO COM O VALOR DO PARAM DEFAULT COMO COM A COR;

*/
    function defineCorCarro($cor = "Vermelha<br>"){
        if(is_string($cor)){
            return "A cor do carro é: $cor <br>";
        }else {
            echo "<h3> ERRO: Digite a cor do carro;</h3>";
        }
    }

    echo defineCorCarro(33);
    echo defineCorCarro();
    echo defineCorCarro('azul');
    
?>