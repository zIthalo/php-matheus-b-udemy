<?php 
    include_once('templates/header.php'); 
?>
    <div class="container">
    <?php include_once("templates/backbtn.html");?>

        <h1 id="main-title" >Editar contato</h1>
        <form  id="create-form" action="<?=$BASE_URL?>config/process.php" method="post">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?=$contact["id"];?>">
            <div class="form-group">
                <label for="name">Nome do contato: </label>
                <input type="text" class="form-control mt-2" id="name" name="name" placeholder="Digite o nome" value="<?=$contact["name"];?>" required>
                <label for="phone">Telefone do contato: </label>
                <input type="text" class="form-control mt-2" id="phone" name="phone" placeholder="Digite o telefone" value="<?=$contact["phone"];?>" required>
                <label for="phone">Observações: </label>
                <textarea type="text" rows="3" class="form-control mt-2" id="observations" name="observations" placeholder="Insira as observações (opcional)"><?=$contact["name"];?></textarea>
                <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
            </div>
        </form>
    </div>
    <!-- Tag i = icons -->
<?php 
    include_once('templates/footer.php')
?>