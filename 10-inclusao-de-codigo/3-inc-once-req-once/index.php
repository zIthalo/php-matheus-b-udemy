<?php 

/*
    -OS DOIS FUNCIONAM DA MESMA MANEIRA QUE O INCLUDE E O REQUIRE;

    -PORÉM IMPEDE QUE O MESMO ARQUIVO SEJA UTILIZADO MAIS DE UMA VEZ NA MESMA PÁGINA (POR ISSO QUE É ONCE);*EVITA REDUNDÂNCIAS

    -ESTE PODE SER O MÉTODO MAIS INDICADO QUANDO ESTAMOS MONTANDO TEMPLATES EM PHP;
*/

    #ARQUIVOS QUE NÃO EXISTEM

    #include_once "testando.php";

    /* MENSAGEM DE ERRO EXIBIDA
    Warning: include_once(testando.php): Failed to open stream: No such file or directory in C:\xampp\htdocs\php-matheus-b-udemy\10-inclusao-de-codigo\3-inc-once-req-once\index.php on line 13

    Warning: include_once(): Failed opening 'testando.php' for inclusion (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\php-matheus-b-udemy\10-inclusao-de-codigo\3-inc-once-req-once\index.php on line 13 
    
    ELE EXIBE UM WARNING E NÃO UM FATAL ERROR. A DIFERENÇA É QUE COM UM WARNING O USUÁRIO PODE CONSUMIR TUDO QUE VIER APÓS O INCLUDE, SE FOSSE UM FATAL ERROR O USUÁRIO NÃO PODERIA CONSUMIR NADA QUE VIESSE ABAIXO DO INCLUDE
    */

    #ARQUIVO QUE EXISTE ↓

    include_once "teste2.php";

    #include_once "teste2.php; eu colocando de novo o include_once, não exibirá erro nenhum, somente não vou conseguir exibir o mesmo conteúro novamente;
    /*
        EX.
        include_once "teste2.php";
        include_once "teste2.php";
        SAÍDA NO SITE:
        Testando o include_once
    */

    #agora se ambos fossem include meus arquivos se repetiriam
    /*
    ex.
    include "teste2.php";
    include "teste2.php";
    SAÍDA NO SITE:
    Testando o include_once
    Testando o include_once
    */

    #ARQUIVOS QUE NÃO EXISTEM
    require_once "teste.php";
    /*
        NO CASO DO require_once, QUANDO NÃO EXISTE O ARQUIVO, ELE EXIBE UM FATAL ERROR, OU SEJA, NADA QUE VENHA APÓS ESTE REQUIRE SERÁ EXIBIDO NO SITE, FUNCIONA IGUAL A UM REQUIRE QUALQUER COM A DIFERÊNÇA QUE SÓ SERÁ EXIBIDO O CONTEÚDO DO ARQUIVO SOMENTE UMA VEZ.

        MENSAGEM EXIBIDA (QUANDO NÃO EXISTE O ARQUIVO QUE MEU REQUIRE ESTÁ CHAMANDO):

        Warning: require_once(teste.php): Failed to open stream: No such file or directory in C:\xampp\htdocs\php-matheus-b-udemy\10-inclusao-de-codigo\3-inc-once-req-once\index.php on line 46

        Fatal error: Uncaught Error: Failed opening required 'teste.php' (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\php-matheus-b-udemy\10-inclusao-de-codigo\3-inc-once-req-once\index.php:46 Stack trace: #0 {main} thrown in C:\xampp\htdocs\php-matheus-b-udemy\10-inclusao-de-codigo\3-inc-once-req-once\index.php on line 46
    */

    /*
    require_once "teste2.php";

    se eu fizer assim meu arquivo não será exibido, pois eu já o usei com o include

    */

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include_once</title>
    <style>
        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: goldenrod;
            
        }
    </style>
</head>
<body>
    <p>Olá</p>
</body>
</html>