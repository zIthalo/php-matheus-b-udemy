<?php 


/*
    - CRIE UMA FUNÇÃO QUE RECEBE CARACTERÍSTICAS DE UM OBJETO COMO ARGUMENTO EX:(CARRO, SOFÁ, CAFETEIRA), EM ARRAY ASSOCIATIVO;
    - O ARRAY DEVE CONTER O NOME PRECO;
    - RETORNE APENAS OS ITENS QUE CUSTAM ACIMA DE $10;
    - IMPRIMA O RETORNO
*/

    function recebeObj($obj){
        $itensCaros = [];
        if (is_array($obj)) {
            $count = 0;
            foreach ($obj as $objs => $preco) {
             if ($preco > 10) {
                array_push($itensCaros, $objs);
             }
         }
         return "Os itens acima de $10 são: " . implode(", ", $itensCaros) . " <br> ";
         }else{
             return "ERRO: Deu tudo errado, mas você vai achar a resposta";
         }
    }
    $preco = [
            "carro" => 10000,
            "sofá" => 1000,
            "caju" => 0.31,
            "jarra" => 10,
            "pulseira" => 12,
            "brinquedo" => 15
        ];
        recebeObj($preco);



        #Esta solução minha só retornou o valor dos itens do obj
       
        ?>