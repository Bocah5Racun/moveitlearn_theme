<?php

// get the hero image
$images_hero;
$images_hero_query = new WP_Query( array(
    'post_type'         => 'attachment',
    'posts_per_page'    => 1,
    'post_status'       => 'any',
    'tax_query'         => array(
        array(
            'taxonomy'  => 'image_location',
            'field'     => 'name',
            'terms'     => 'hero',
            )
        ),
    )
);
$images_mitra;

$images_mitra_query = new WP_Query( array(
    'post_type'         => 'attachment',
    'post_status'       => 'any',
    'orderby'          => 'rand',
    'tax_query'         => array(
        array(
            'taxonomy'  => 'image_location',
            'field'     => 'name',
            'terms'     => 'mitra',
            )
        ),
    )
);

$token = get_option( 'moodle_api_token' );

// get the hero image
if( $images_hero_query->have_posts() ) {
    while( $images_hero_query->have_posts() ) {
        $images_hero_query->the_post();
        $images_hero = wp_get_attachment_image_url( get_the_ID(), 'full' );
        if( $images_hero ) break;   
    }
}

get_header();

?>

<section id="hero" class="container">
    <div id="hero-text">
        <h1><?= get_bloginfo( 'description' ); ?></h1>
        <p>Setiap siswa berhak mendapatkan pendidikan yang berkualitas. Belajar tentang hak dan praktik inklusi dalam pendidikan Indonesia dengan <b>modul bersertifikat gratis</b> Move It Learn.</p>
        <div id="hero-cta-box">
            <a href="https://moveitlearn.com/belajar" class="btn btn--blue">Belajar Sekarang</a>
        </div>
    </div>
    <div id="hero-image-wrapper">
        <img id="hero-image-model" src="<?= $images_hero; ?>" alt="">
    </div>
</section>

<section id="modules">
    <div class="modules-inner-wrapper container">
        <div class="modules-text">
            <h2>6 Modul Pendidikan Inklusi</h2>
            <p>Modul bersertifikat tentang tantangan, informasi, dan kerangka hukum inklusi dalam konteks pendidikan di Indonesia.</p>
        </div>
        <div class="module-cards-wrapper">
            <?php
                foreach( $courses as $course):
            ?>
            <div class="module-card">
                <div class="module-info">
                    <a href="https://moveitlearn.com/belajar/course/view.php?id=<?= $course['id']; ?>">
                        <img src="<?= $course['courseimage'];?>" alt="" class="module-course-image">
                    </a>
                    <a href="https://moveitlearn.com/belajar/course/view.php?id=<?= $course['id']; ?>">
                        <div class="module-title"><?= $course['displayname']; ?></div>
                    </a>
                    <div class="module-desc"><?= $course['summary']; ?></div>
                </div>
                <div class="certificate-info">
                    <icon type="certificate"></icon> Bersertifikat
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php if( $images_mitra_query->have_posts() ): ?>

<section id="partners-logo-container">
    <div class="partners-logo-content-container text-center">
        <h2>Mitra Move It</h2>
        <div class="partners-logo-outer">
            <div id="partners-logos-container">
                <?php
                
                    while( $images_mitra_query->have_posts() ):
                        $images_mitra_query->the_post();
                        $images_mitra = wp_get_attachment_image_url( get_the_ID(), 'medium' );
                ?>
    
                <img src="<?= $images_mitra; ?>" alt="" class="partners-logo">
                
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<section id="tentang-moveit">
    <div class="tentang-moveit-inner-wrapper container">
        <div class="tentang-moveit-image-wrapper">
            <img src="<?= get_template_directory_uri(); ?>/includes/imgs/praktik-inklusi-highlights.png" alt="" class="tentang-moveit-image">
        </div>
        <div class="tentang-moveit-text">
            <h2>Praktik Inklusi untuk Pendidikan Indonesia</h2>
            <p>Move It digagas untuk mendorong perubahan menuju Indonesia yang lebih inklusif, dimulai dari sistem pendidikan.</p>
            <p>Dengan bantuan ahli inklusivitas serta kontribusi dari guru, siswa, dan pembuat kebijakan di Gorontalo, AIDRAN mengembangkan <b>6 modul pendidikan inklusi</b> yang bertujuan membangun kesadaran dan kepedulian tentang inklusi serta memandu implementasi praktek inklusi di sistem pendidikan.</p>
            <a href="" class="btn btn--yellow">Baca Selengkapnya Tentang Move It</a>
        </div>
</section>

<section id="cerita-baik">
    <div class="cerita-baik-inner-wrapper container">
        <div class="cerita-baik-text">
            <h2>Cerita Baik Komunitas Move It</h2>
            <p> Lebih dari 180 guru, siswa, dan pembuat kebijakan di Provinsi Gorontalo telah menjadi bagian dari gerakan menuju pendidikan yang lebih inklusif bersama Move It.</p>
        </div>
        <div class="cerita-baik-cards-wrapper">
            <div class="cerita-baik-card">
                <img src="<?= get_template_directory_uri(); ?>/includes/imgs/testimonials-yeyen.png" alt="" class="cerita-baik-pic">
                <div class="cerita-baik-identity">
                    <div class="cerita-baik-identity-name">Yeyen</div>
                    <div class="cerita-baik-identity-affiliation">Siswa & Teman Tuli Yayasan Putra Mandiri</div>
                </div>
                <div class="cerita-baik-quote-wrapper">Saya mengucapkan terima kasih pada AIDRAN karena dengan [Move It] ini saya bisa mendapat banyak materi baru tentang pendidikan inklusi.</div>
            </div>
            <div class="cerita-baik-card">
                <img src="<?= get_template_directory_uri(); ?>/includes/imgs/testimonials-bobby.png" alt="" class="cerita-baik-pic">
                <div class="cerita-baik-identity">
                    <div class="cerita-baik-identity-name">Bobby A. Gani</div>
                    <div class="cerita-baik-identity-affiliation">Koordinator Widyaprada BPMP Gorontalo</div>
                </div>
                <div class="cerita-baik-quote-wrapper">Saya mendapatkan pemahaman yang lebih komprehensif lagi terkait bagaimana mengakomodasi layanan belajar untuk pendidikan inklusi.</div>
            </div>
            <div class="cerita-baik-card">
                <img src="<?= get_template_directory_uri(); ?>/includes/imgs/testimonials-hafsah.png" alt="" class="cerita-baik-pic">
                <div class="cerita-baik-identity">
                    <div class="cerita-baik-identity-name">Hafsah Rajak</div>
                    <div class="cerita-baik-identity-affiliation">Guru SMPN 2 Buntulia Satap</div>
                </div>
                <div class="cerita-baik-quote-wrapper">Dari kegiatan [Move It] ini bisa bertambah pengetahuan bagaimana kita di lapangan menangani anak-anak disabilitas dan non-disabilitas.</div>
            </div>
        </div>
    </div>
</section>

<section id="fase-satu">
    <img src="<?= get_template_directory_uri(); ?>/includes/imgs/moveit-group-photo.jpg" alt="" class="fase-satu-pic">
    <div class="fase-satu-inner-wrapper container">
        <div class="fase-satu-text">
            <h2>Dari Gorontalo untuk Indonesia yang Lebih Inklusif</h2>
            <p>Program Move It dimulai di Gorontalo, provinsi dengan salah satu angka disabilitas tertinggi di Indonesia. Melalui penelitian lapangan dan diskusi panjang bersama guru, kelompok aktivis, dan pembuat kebijakan di Gorontalo, AIDRAN menggali wawasan krusial tentang tantangan pendidikan inklusif di Indonesia.</p>
            <a href="" class="btn btn--yellow">Baca Hasil Riset Move It</a>
        </div>
    </div>
</section>

<section id="bottom-cta">
    <div class="bottom-cta-inner-wrapper container">
        <div class="bottom-cta-text">
            <h2>Jangan Berhenti Bergerak</h2>
            <p>Jadilah bagian dari gerakan menuju Indonesia yang lebih adil, ramah, dan terbuka bagi semua orang.</p>
            <a href="https://moveitlearn.com/belajar" class="btn btn--blue">Dapatkan Sertifikat Move It</a>
        </div>
        <img src="<?= get_template_directory_uri(); ?>/includes/imgs/bottom-cta-pic.png" alt="" class="bottom-cta-pic">
    </div>
</section>

<script>

// scroll logos
    const logosCtr = document.getElementById('partners-logos-container')
    const parent = logosCtr.parentElement

    const logosCtrWidth = logosCtr.offsetWidth
    const parentWidth = parent.offsetWidth

    let scrollSpeed = 0.5
    let scrollPosition = 0
    let isPaused = false

    if( logosCtrWidth > parentWidth ) {
        logosCtr.style.justifyContent = 'flex-start'
        const clone = logosCtr.cloneNode()

        parent.append(clone)
    }

    function animateScroll() {
        if(!isPaused) {
            scrollPosition += scrollSpeed
    
            if (scrollPosition >= parent.scrollWidth / 2) {
                scrollPosition = 0; // reset to beginning
            }
            logosCtr.style.transform = `translateX(-${scrollPosition}px)`;
        }
        requestAnimationFrame(animateScroll);
    }

    animateScroll()

    parent.addEventListener('mouseover', () => isPaused = true)
    parent.addEventListener('touchstart', () => isPaused = true)
    parent.addEventListener('mouseout', () => { isPaused = false })
    parent.addEventListener('touchend', () => { isPaused = false })


</script>

<?php get_footer(); ?>