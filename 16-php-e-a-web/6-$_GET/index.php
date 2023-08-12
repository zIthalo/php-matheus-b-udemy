<?php 
/*
    - Vamos precisar criar um form e definir o método como GET, e também o arquivo ou rota que vamos acessar em action;
    
    - No lado do servidor vamos acessar a variável $_GET que contém os parâmetros enviados para o servidor;
    
    - Faremos o processamento e retornamos algo para o usuário;

    - Para mais info da página eu fui em devtools(f12), depois em rede/network, selecionei a flag all, depois atualizei o devtools, cliquei na primeira requisição e vi que estava sendo utilizada com o método get;
*/

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste De Formulários Com GET</title>
</head>
<body>
    <form action="processamento.php" method="get">
        <section>
        <input type="text" name="nome" placeholder="Digite seu nome">
        </section>
        <section>
        <input type="text" name="idade" placeholder="Digite sua idade">
        </section>
        <section>
            <input type="submit" value="Enviar">
        </section>
    </form>
</body>
</html>