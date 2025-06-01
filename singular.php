<?php

$the_post_thumb_url = get_the_post_thumbnail_url();

get_header();

?>

<div id="singular-progress-bar-container">
    <div id="singular-progress-bar"></div>
</div>

<?php if( $the_post_thumb_url ) : ?>
<img src="<?= $the_post_thumb_url; ?>" alt="" class="singular-featured-img">
<?php endif; ?>

<h1 class="singular-title"><?= get_the_title(); ?></h1>

<main id="singular-main-wrapper" class="container container--page text-container">
    <?php the_content(); ?>
</main>

<?php get_footer(); ?>