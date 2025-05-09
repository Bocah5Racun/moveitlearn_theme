<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="header-inner-wrapper container">
        <nav id="header-nav-group">
            <?php the_custom_logo(); ?>
        </nav>
        <nav class="header-topbar-wrapper">
            <?php wp_nav_menu( array( 'theme_location' => 'topbar-menu', 'menu_class' => 'topbar-menu')); ?>
            <a href="https://moveitlearn.com/belajar" class="topbar-cta">Eksplor Modul Move It Learn</a>
        </nav>
        <nav id="mobile-nav">
            <img src="<?= get_template_directory_uri(); ?>/includes/imgs/burger-icon.svg" alt="" class="mobile-burger-icon">
        </nav>
    </div>
</header>