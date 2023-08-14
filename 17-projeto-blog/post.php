<?php 
    include_once("templates/header.php");
    if (isset($_GET['id'])) {
        $postID = $_GET['id'];
        $currentPost;

        foreach ($posts as $post) {
            if ($post['id'] == $postID) {
                $currentPost = $post;
            }
        }
    }
?>

    <main id="post-container">
        <section class="content-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p id="post-description"><?= $currentPost['description']?></p>
            <section class="img-container">
                <img src="<?=$BASE_URL;?>/img/<?= $currentPost['img'];?>" alt="<?= $currentPost['title']?>">
            </section>
        </section>
    </main>

<?php 
include_once("templates/footer.php");
?>