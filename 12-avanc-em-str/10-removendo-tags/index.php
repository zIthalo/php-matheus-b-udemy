<?php 
 /*
    PODEMOS REMOVER AS TAGS DE HTML DE UMA STR COM A FUNÇÃO strip_tags;
    GERALMENTE PARA SALVAR DADOS NO BANCO REMOVEMOS AS TAGS;
 
 */
    $textoHtml = "<p> Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

    echo "Com as tags:<br>$textoHtml";

    $removedorDeTags = strip_tags($textoHtml);

    echo "Sem as tags:<br>$removedorDeTags";
    #isto é útil para salvar os dados no banco, para o texto não ir poluído com tags html;

    
?>