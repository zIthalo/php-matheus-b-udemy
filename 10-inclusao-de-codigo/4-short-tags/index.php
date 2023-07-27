<?php 
/*
    -NÃO UTILIZE SHORT TAGS, NÃO TEM NECESSIDADE E, AINDA POR CIMA, PODE CAUSAR DANOS NOS CÓDIGOS, POIS NEM TODOS OS SERVIDORES PERMITEM O USO DE SHORT TAGS
    [UMA SHORT TAG = <? ?>] [SUPERTAG NORMAL = <?php ?>]
*/
    echo "<p>Testando o php com as super tags normais</p>"
?>

<? 
    echo "Testando o php com short tags";
    /*
    -PARA HABILITAR AS SHORT TAGS, VOCÊ PRECISA IR NO PHP.INI, QUE É ENCONTRADO NA OPÇÃO DE CONFIG DO APACHE;
    -USE O COMANDO DE BUSCA (F3 OU CTRL + D salvo engano) E DIGITE SHORT OPEN;
    -QUANDO VOCÊ VER A OPÇÃO (short_open_tag=off) MUDE PARA ON;
    -DEPOIS REINICIE O SEU SERVIDOR APACHE E PRONTO;

    
    */
?>