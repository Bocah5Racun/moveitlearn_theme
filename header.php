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
            <li>Hasil Riset Move It</li>
            <li>Tentang Platform Move It Learn.</li>
        </ul>
        <hr>
        <ul class="mobile-menu-main-menu-group">
            <li>Tim Move It</li>
            <li>Mitra & Kolaborator</li>
        </ul>
        <hr>
        <ul class="mobile-menu-main-menu-group">
            <li>Tentang AIDRAN</li>
            <li>Gabung Jadi Teman AIDRAN</li>
            <li>Riset & Advokasi</li>
        </ul>
        <div class="mobile-menu-socials">
            <div class="mobile-menu-socials-heading">Follow AIDRAN</div>
            <a href="https://www.instagram.com/aidran_/" target="_new"><img src="<?= get_template_directory_uri(); ?>/includes/imgs/instagram-social.png" alt="Follow AIDRAN di Instagram" class="icon-socials"></a>
            <a href="https://www.linkedin.com/company/aidran" target="_new"><img src="<?= get_template_directory_uri(); ?>/includes/imgs/linkedin-social.png" alt="Kunjungi profil LinkedIn AIDRAN" class="icon-socials"></a>
        </div>
    </div>
</nav>

<header>
    <div class="header-inner-wrapper container">
        <nav id="header-nav-group">
            <?php the_custom_logo(); ?>
        </nav>
        <nav class="header-topbar-wrapper">
            <?php wp_nav_menu( array( 'theme_location' => 'topbar-menu', 'menu_class' => 'topbar-menu')); ?>
            <a href="https://moveitlearn.com/belajar" class="btn btn--blue">Eksplor Modul Move It</a>
        </nav>
        <nav id="mobile-nav" onclick="toggleMenu()">
            <img src="<?= get_template_directory_uri(); ?>/includes/imgs/burger-icon.svg" alt="" class="mobile-burger-icon">
        </nav>
    </div>
</header>