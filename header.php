<?php global $courses; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    
</head>
<body>

<nav id="mobile-menu" aria-expanded="false">
    <div class="mobile-menu-close-wrapper" onclick="toggleMenu()">
        Tutup Menu
        <img src="<?= get_template_directory_uri(); ?>/includes/imgs/close-button.png" alt="" class="mobile-menu-close-icon">
    </div>
    <div class="mobile-menu-main-menu-wrapper">
        <div class="mobile-menu-main-menu-group">
            <?php the_custom_logo(); ?>
        </div>
        <div class="mobile-menu-main-menu-group">
            <a href="https://moveitlearn.com/belajar" class="btn btn--blue">🔍 Eksplor Modul Move It</a>
            <a href="https://moveitlearn.com/belajar" class="btn btn--outline">📖 Baca Tentang Proyek Move It</a>
        </div>
        <ul class="mobile-menu-main-menu-group">
            <li>Blog</li>
            <li>Riset</li>
            <li>Move It Learn</li>
        </ul>
        <hr>
        <ul class="mobile-menu-main-menu-group">
            <li>Tentang AIDRAN</li>
            <li>Riset & Advokasi</li>
        </ul>
    </div>
</nav>

<header>
    <div class="header-inner-wrapper container">
        <nav id="header-nav-group">
            <?php the_custom_logo(); ?>
        </nav>
        <nav class="header-topbar-wrapper">
            <?php wp_nav_menu( array( 'theme_location' => 'topbar-menu', 'menu_class' => 'topbar-menu')); ?>
        </nav>
        <nav id="mobile-nav" onclick="toggleMenu()">
            <img src="<?= get_template_directory_uri(); ?>/includes/imgs/burger-icon.svg" alt="" class="mobile-burger-icon">
        </nav>
    </div>
</header>