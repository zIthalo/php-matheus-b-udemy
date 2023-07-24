<?php

function verificarAcesso($n1, $bool){
    if(is_int($n1) && is_bool($bool)){
    if ($n1 >= 18 && $bool === true) {
        echo "Acesso autorizado <br>";
    } elseif ($n1 < 18) {
        echo "Acesso negado. Idade mínima requerida: 18 anos. <br>";
    }else {
        echo "Acesso negado. Autorização necessária. <br>";
    }
}else{
    echo 'Valores digitados inválidos. Digite por ex (idadeEmNúmero, true ou false). <br>';
}
}

verificarAcesso(25, true);
?>