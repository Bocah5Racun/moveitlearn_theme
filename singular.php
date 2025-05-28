<?php get_header(); ?>

<main id="singular-main-wrapper" class="container">
    <h1 class="singular-title"><?= get_the_title(); ?></h1>
    <?php the_content(); ?>
</main>

<?php get_footer(); ?>