<?php 
//No meu pc funcionou de boa mas se não funcionar a gente cria esta base url para poder linkar estilos no site, isto nada mais é que uma url base para deixar tudo do projeto em um só lugar. Para inserir onde eu quero é só eu chamalo via include
$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';
?>