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
            <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae natus eos nemo atque. Amet voluptatum iste impedit recusandae eos obcaecati sed mollitia suscipit. Aperiam at ex possimus laudantium sapiente odio!
            Quas ad sit dolores necessitatibus, exercitationem quis ipsum aliquam esse, id, consequuntur quisquam rerum obcaecati! Quisquam maxime tempora voluptatum consequuntur amet facilis eius dicta consectetur, rerum ducimus nulla nobis quo!
            Eum cum autem eligendi corporis amet? Ipsum dignissimos fugiat voluptates corporis tempore hic sequi facilis vel consectetur possimus, ex voluptas in inventore. Quaerat nisi sunt laboriosam vitae, numquam iure rem?
            Harum laboriosam in nostrum quas impedit quo odit voluptatem doloribus earum quae vero, accusantium nihil quidem est deleniti quisquam, minima repellendus cumque quaerat. Error natus blanditiis iusto, nisi nesciunt inventore.
            Reiciendis porro quaerat provident amet mollitia modi dolor reprehenderit atque placeat repudiandae neque velit optio laboriosam vero saepe soluta, quisquam necessitatibus quod enim ratione natus, rem perspiciatis. Mollitia, reiciendis repellat!</p>
            <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae natus eos nemo atque. Amet voluptatum iste impedit recusandae eos obcaecati sed mollitia suscipit. Aperiam at ex possimus laudantium sapiente odio!
            Quas ad sit dolores necessitatibus, exercitationem quis ipsum aliquam esse, id, consequuntur quisquam rerum obcaecati! Quisquam maxime tempora voluptatum consequuntur amet facilis eius dicta consectetur, rerum ducimus nulla nobis quo!
            Eum cum autem eligendi corporis amet? Ipsum dignissimos fugiat voluptates corporis tempore hic sequi facilis vel consectetur possimus, ex voluptas in inventore. Quaerat nisi sunt laboriosam vitae, numquam iure rem?
            Harum laboriosam in nostrum quas impedit quo odit voluptatem doloribus earum quae vero, accusantium nihil quidem est deleniti quisquam, minima repellendus cumque quaerat. Error natus blanditiis iusto, nisi nesciunt inventore.
            Reiciendis porro quaerat provident amet mollitia modi dolor reprehenderit atque placeat repudiandae neque velit optio laboriosam vero saepe soluta, quisquam necessitatibus quod enim ratione natus, rem perspiciatis. Mollitia, reiciendis repellat!</p>
        </section>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tags-list">
                <?php foreach($currentPost['tags'] as $tag):?>
                    <li><a href="#"><?=$tag?></a></li>
                <?php endforeach;?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list"> 
            <?php foreach($categories as $category):?>
                    <li><a href="#"><?=$category?></a></li>
            <?php endforeach;?>
            </ul>
        </aside>
    </main>
<?php 
include_once("templates/footer.php");
?>