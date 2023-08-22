<?php 
/*
    Validação de forms
    
    - A validação é uma parte importante do recebimento de dados;

    - Devemos checar se os dados enviados condizem com o que estamos esperando;

    - Para isso podemos criar condicionais fazendo as verificações;

    - Caso alguma não atenda ou um campo obrigatório esteja vazio, retornamos uma mensagem ao usuário;

    - Obs: é possível fazer validações com HTML e JavaSccript, também.
    (Detalhe, estas linguagens nunca podem ser para fazer essa validação final, pois o usuário tem como maipulá-las, sendo um sistema fraco em segurança)
*/

# fazendo us sistema de validação de campos ↓
// Primeiro cria-se um array para receber as validações dos campos
$validacoes = [];
// Agora verifica-se se o array post tem mais de 0 índices
if (count($_POST) > 0) {
    // Agora confirma-se quais campos foram preenchidos, e nenhum pode estar vazio
    // Se o campo nome estiver vazio ↓
    if ($_POST['nome'] === "") {
        // Se nenhum nome for digitado um dos índices do meu array $validacoes[] vai receber isso, e estes valores de índices serão mostrados por uma ul no meu html
        $validacoes[] = 'Por favor, preencha o nome do usuário';
    }
    if ($_POST['email'] === "") {
        $validacoes[] = 'Por favor, preencha o email do usuário';
    }
    // se a senha for diferente da senha de confirmação
    if ($_POST['senha'] != $_POST['confirmacao']) {
         $validacoes[] = 'As senhas devem ser iguais!';
    }
    // if ($_POST['senha'] === "") {
    //     $validacoes[] = 'Por favor, confirme a senha do usuário';
    // }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando form</title>
</head>
<body>
    <!-- ↓ pegue a quantidade de índices do meu arr validacoes -->
    <?php  if (count($validacoes)): ?>
     <ul>
        <?php foreach ($validacoes as $validacao): ?>
        <!-- Cada índice que o meu arr validacoes recebar será exibido por um novo <li> -->
        <li><?= $validacao ?></li>
        <?php endforeach;?>
     </ul>
    <?php endif;?>
    <form action="index.php" method="post">
        <div>
            <input type="text" name="nome" id="" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="text" name="email" placeholder="Digite seu email">
        </div>
        <div>
            <input type="password" name="senha" placeholder="Digite sua senha">
        </div>
        <div>
            <input type="password" name="confirmacao" placeholder="Confirme sua senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>