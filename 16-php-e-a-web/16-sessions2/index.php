<?php 

/*      Onde são salvas as sessions
    
    - As sessions são salvas em arquivos no computador que estamos ou no servidor da aplicação
 
    - O caminho para onde os arquivos são salvos fica em php.ini na configuração session.save_path;
 
    - As sessions podem ser salvas em dois formatos: o próprio do PHP e também o Web Distributed Data eXchange(WDDX);
*/
# Para iniciar a sessão ↓
session_start();
//print_r($_SESSION);
// Como salvar algo na session?

    //Para ver temos que ir no dev tools
    $_SESSION['nome'] = 'Ithalo';
    // Se formos na área de cookies terá um id e um valor aleatório, isto serve para o php reconhecer quem está acessando;
    
    // Na área page.php posso ver minha sessão com meu nome lá, mas se eu copiar a url e jogar para uma página anonima o php não vai reconhecer pois meu ID só é reconhecido em páginas abertas pois pega o ID e value que foram salvos nos cookies. Páginas anônimas não guardarão meu id.
    
    // $_SESSION['nome'] = 'Ithalo';
    // Este dado, na vida real deve vir de um banco de dados e não assim, mas ainda estamos aprendendo.
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: goldenrod;
        }
    </style>
</head>
<body>
    <h1>Olá Session</h1>
</body>
</html>