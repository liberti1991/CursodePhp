<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

  $postId = $_GET['id'];

  $currentPost;

  foreach ($posts as $post) {
    if ($post['id'] == $postId) $currentPost = $post;
  }
}
?>

<main id="post-container">
  <div class="content-conteiner">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, eius aperiam. Enim, error ex voluptatem omnis molestiae est officia. Ex delectus voluptates corrupti ducimus recusandae harum velit distinctio placeat deserunt.
      Aliquid perferendis similique veritatis culpa tempora fugit enim? Fuga debitis blanditiis quisquam rem facilis doloremque sed delectus eaque molestiae quidem suscipit optio, dicta quod animi, qui, quam accusantium eos aut!
      Nihil ducimus veniam provident voluptatibus nulla, officiis enim non magnam alias, eius saepe nisi ipsum. Temporibus expedita a aut repellat autem, mollitia ut deserunt, odit saepe laboriosam laudantium corrupti eius?
      Sapiente quaerat iste beatae ducimus sequi ipsa provident dolorum sunt accusamus, dignissimos debitis. Autem ipsa mollitia natus laborum amet temporibus in fugiat perspiciatis labore, obcaecati assumenda veritatis incidunt, enim placeat.
      Rem delectus amet expedita velit quia omnis non saepe natus maxime sint nostrum beatae vitae iste, aperiam excepturi eaque optio obcaecati incidunt voluptatem at odio iure recusandae voluptate! Aspernatur, voluptate.
    </p>
    <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, eius aperiam. Enim, error ex voluptatem omnis molestiae est officia. Ex delectus voluptates corrupti ducimus recusandae harum velit distinctio placeat deserunt.
      Aliquid perferendis similique veritatis culpa tempora fugit enim? Fuga debitis blanditiis quisquam rem facilis doloremque sed delectus eaque molestiae quidem suscipit optio, dicta quod animi, qui, quam accusantium eos aut!
      Nihil ducimus veniam provident voluptatibus nulla, officiis enim non magnam alias, eius saepe nisi ipsum. Temporibus expedita a aut repellat autem, mollitia ut deserunt, odit saepe laboriosam laudantium corrupti eius?
      Sapiente quaerat iste beatae ducimus sequi ipsa provident dolorum sunt accusamus, dignissimos debitis. Autem ipsa mollitia natus laborum amet temporibus in fugiat perspiciatis labore, obcaecati assumenda veritatis incidunt, enim placeat.
      Rem delectus amet expedita velit quia omnis non saepe natus maxime sint nostrum beatae vitae iste, aperiam excepturi eaque optio obcaecati incidunt voluptatem at odio iure recusandae voluptate! Aspernatur, voluptate.
    </p>
  </div>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach ($currentPost['tags'] as $tag) : ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
    <?php foreach ($categories as $category) : ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
</main>


<?php
include_once("templates/footer.php");
?>