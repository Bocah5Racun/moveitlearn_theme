<?php

$all_posts = get_posts();

get_header();

?>

<main id="singular-main-wrapper" class="container">
    <h1 class="singular-title"><?= single_cat_title(); ?></h1>
    <p><?= category_description(); ?></p>
    <div class="column-wrapper">

    <?php foreach($all_posts as $post):
        $post_thumb_url = get_the_post_thumbnail_url( $post->ID );
    ?>

    <div class="post-wrapper">
        <img src="<?= $post_thumb_url; ?>" alt="" class="post-thumb">
        <h4 class="post-title"><?= the_title(); ?></h4>
        <p class="post-excerpt"><?= get_the_excerpt(); ?></p>
    </div>

    <?php endforeach; ?>

    </div>
</main>

<?php get_footer(); ?>