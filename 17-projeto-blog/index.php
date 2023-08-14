<?php 
    include_once("templates/header.php");

?>
<!-- Com os includes eu só preciso colocar os conteúdos centrais das páginas -->
<main>
    <section id="title-container">
        <h1>Blog Ithalo</h1>
        <p>O seu blog de programação</p>
    </section>
    <section id="posts-container">

        <?php foreach ($posts as $post): ?>
            <section class="post-box">
                <img src="<?=$BASE_URL;?>/img/<?= $post['img'];?>" alt="<?= $post['title'];?>">
                <h2 class="post-title">
                    <a href="<?=$BASE_URL;?>post.php?id=<?= $post['id']?>">
                    <?= $post['title'];?>
                </a> 
                </h2>
                <p class="post-description"><?= $post['description'];?></p>
                <section class="tags-container">
                    <?php foreach($post['tags'] as $tag):?>
                        <a href="#"><?=$tag?></a>
                    <?php endforeach;?>
                    
                </section>
            </section>
        <?php endforeach;?>
    </section>
</main>
<?php 
include_once("templates/footer.php");

?>