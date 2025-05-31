<?php

$all_posts = get_posts();

get_header();

?>

<main id="category-wrapper" class="container container--page">
    <h1 class="singular-title"><?= single_cat_title(); ?></h1>
    <p class="category-desc"><?= category_description(); ?></p>

    <div class="category-posts-wrapper">

    <?php foreach($all_posts as $post):
        $post_thumb_url = get_the_post_thumbnail_url( $post->ID );
    ?>

    <div class="category-post">
        <a href="<?= get_the_permalink(); ?>" class="category-link">
            <img src="<?= $post_thumb_url; ?>" alt="" class="category-post-thumb">
            <h4 class="category-post-title"><?= the_title(); ?></h4>
        </a>
        <div class="category-post-meta">
            <span class="category-post-author"><?= get_author_name( $post->post_author ); ?></span> • <span class="category-post-date"><?= get_the_date(); ?></span> • <span class="category-post-reading-time"><?= reading_time(); ?></span>
        </div>
        <p class="category-post-excerpt"><?= get_the_excerpt(); ?></p>
    </div>

    <?php endforeach; ?>

    </div>
</main>

<?php get_footer(); ?>