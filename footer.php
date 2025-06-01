<?php global $courses; ?>
<footer id="footer">
    <div class="container">

        <div class="footer-inner-top-wrapper">
            <div class="footer-menu">
                <div class="footer-menu-title">Modul Move It Learn.</div>
                <div class="footer-menu-items-wrapper">
                    <ul class="footer-modules-menu">
                        <?php
                            foreach( $courses as $course ):
                        ?>
    
                        <li><a href="https://moveitlearn.com/belajar/course/view.php?id=<?= $course['id']; ?>"><?= $course['fullname']; ?></a></li>
    
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="footer-menu">
                <div class="footer-menu-title">Proyek Move It</div>
                <div class="footer-menu-items-wrapper">
                    <?php wp_nav_menu( array( 'theme_location' => 'moveit-menu', 'menu_class' => 'topbar-menu')); ?>
                </div>
            </div>
            <div class="footer-menu">
                <div class="footer-menu-title">AIDRAN</div>
                <div class="footer-menu-items-wrapper">
                    <?php wp_nav_menu( array( 'theme_location' => 'aidran-menu', 'menu_class' => 'topbar-menu')); ?>
                </div>
            </div>
            <div class="footer-menu">
                <div class="footer-menu-title">Sumber Daya</div>
                <div class="footer-menu-items-wrapper">
                    <?php wp_nav_menu( array( 'theme_location' => 'sumber-daya-menu', 'menu_class' => 'topbar-menu')); ?>
                </div>
            </div>
        </div>
        <div class="footer-inner-btm-wrapper">
            <div class="footer-copyright">
                <div class="footer-logo">
                    <img src="<?= get_template_directory_uri() . '/includes/imgs/aidran-black-txt-no-full-name.png"' ;?>" alt="" class="footer-logo--aidran">
                </div>
                © 2025<?= date("Y") > 2025 ? '–'.date("Y") : ''; ?> Australia-Indonesia Disability Research and Advocacy Network. All rights reserved.<br>
                Diinisiasi oleh Janisa Pascawati, Minerva Yanuar, Dwi Lestari, Cici Alfiah Linggawati.<br>
                Designed by <a href="https://komkom.id">KOMKOM.id</a>.
            </div>
            <div class="footer-socials">
                <a href="https://www.instagram.com/aidran_/" target="_new"><img src="<?= get_template_directory_uri(); ?>/includes/imgs/instagram-social.png" alt="Follow AIDRAN di Instagram" class="icon-socials"></a>
                <a href="https://www.linkedin.com/company/aidran" target="_new"><img src="<?= get_template_directory_uri(); ?>/includes/imgs/linkedin-social.png" alt="Kunjungi profil LinkedIn AIDRAN" class="icon-socials"></a>
            </div>
        </div>
    </div>
</footer>

<script>
    const mobileMenu = document.getElementById("mobile-menu")

    function toggleMenu() {
        const mobileMenuState = mobileMenu.getAttribute('aria-expanded') === 'true'
        mobileMenu.setAttribute('aria-expanded', !mobileMenuState)
    }
</script>

<?php wp_footer(); ?>

</body>
</html>