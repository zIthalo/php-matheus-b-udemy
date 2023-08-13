<?php 
/*
    - Para enviar arquivos ao servidor vamos precisar mudar o enctype do formulário para: multipart/form-data;
    - Também será necessário um input de tipo file;
    - O tamanho do arquivo pode ser exaurir a memória do servidor;
    - Depois do envio, todos os dados da imagem estarão em $_FILES
*/
    if (isset($_FILES)) {
        print_r($_FILES);
    }
    // Saída: Array ( [imagem] => Array ( [name] => Imagem do WhatsApp de 2023-06-07 à(s) 11.42.10.jpg [full_path] => Imagem do WhatsApp de 2023-06-07 à(s) 11.42.10.jpg [type] => image/jpeg [tmp_name] => C:\xampp\tmp\phpB865.tmp [error] => 0 [size] => 353552 ) )
    // Com essas infos depois eu vou poder manipular a imagem
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <section>
            <input type="file" name="imagem" value="">
        </section>
        <section>
            <input type="submit" value="Enviar">
        </section>
    </form>
</body>
</html>