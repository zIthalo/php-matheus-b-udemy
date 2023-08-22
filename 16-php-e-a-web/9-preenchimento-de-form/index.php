<?php 
/*
    - Podemos preencher o formulário com dados que vieram da requisição;
    
    - Isso acontece bastante em resultados de busca ou edições de registros;

    - Podemos fazer uma checagem de se o dado foi enviado e recebido para página, e utilizar o echo para exibir no atributo value do input;

    - Ex:
        <input type="text" value="<?php echo $nome; ?>">
*/
$usuario = [
    'nome' => 'Ithalo',
    'idade' => 26,
    'profissao' => 'Programador'
];
if ($usuario) {
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
}
// com isso acima eu quero pegar os dados do mock e colocá-los no meu form lá em baixo
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preenchimento de form</title>
</head>
<body>
    <form action="">
        <section>
            <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
            <!-- Neste caso acima ao invés de aparecer o placeholder aparecerá já o nome que está no mock(Array de exemplo $usuario) -->
        </section>
        <section>
            <input type="text" name="idade" placeholder="Digite sua idade" value="<?= $idade ?>">
        </section>
        <section>
            <input type="text" name="profissao" placeholder="Digite sua profissão" value="<?= $profissao ?>">
        </section>
        <section>
            <input type="submit" value="Enviar">
        </section>
    </form>
</body>
</html>