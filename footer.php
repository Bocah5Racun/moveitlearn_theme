<?php

// get all moodle courses
$courses = isset( $_SESSION["courses"] ) ? $_SESSION["courses"] : die( "Couldn't find courses." );

?>

<footer id="footer">
    <div class="container">

        <div class="footer-inner-top-wrapper">
            <div class="footer-menu">
                <div class="footer-menu-title">Modul Move It Learn</div>
                <div class="footer-menu-items-wrapper">
                    <ul class="footer-modules-menu">
                        <?php
                            foreach( $courses as $course ):
                        ?>
    
                        <li><a href="https://moveitlearn.com/belajar/course/view.php?id=<?= $course->id; ?>"><?= $course->fullname; ?></a></li>
    
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
                <div class="footer-menu-title">Komunitas</div>
                <div class="footer-menu-items-wrapper">
                    <?php wp_nav_menu( array( 'theme_location' => 'komunitas-menu', 'menu_class' => 'topbar-menu')); ?>
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
                © 2025<?= date("Y") > 2025 ? '–'.date("Y") : ''; ?> Australia-Indonesia Disability Research and Advocacy Network. All rights reserved. Designed by <a href="https://komkom.id">KOMKOM.id</a> in collaboration with <a href="https://fisipupri.ac.id">FISIP Universitas Pejuang Republik Indonesia</a>.
            </div>
            <div class="footer-socials"></div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>