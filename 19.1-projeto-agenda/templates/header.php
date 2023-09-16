<?php 

    include_once("config/url.php");
    include_once("config/conn.php");
    include_once("config/process.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome (podemos criar ícones)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?=$BASE_URL?>css/style.css">
    <title>Agenda de contatos</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary"><a href="<?$BASE_URL?>index.php"><img src="<?=$BASE_URL?>img/logo.svg"  class="logo" alt="logo-agenda"></a>
        <div>
            <div class="navbar-nav">
                <a href="<?$BASE_URL?>index.php" id="home-link" class="nav-link active">Home</a>
                <a href="<?$BASE_URL?>create.php" class="nav-link active">Adicionar contato</a>
            </div>
        </div>
        </nav>
    </header>