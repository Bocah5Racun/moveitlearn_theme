<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        #announcement-container {
            align-items: center;
            display: flex;
            flex-direction: column;
            font-size: 18px;
            gap: 1rem;
            margin: 0 auto;
            padding: 1rem;
            width: clamp(380px, 100%, 65ch);
        }

        img.custom-logo {
            width: 180px;
            height: auto;
        }

    </style>
</head>
<body>

    <main id="announcement-container">
        <?php the_custom_logo(); ?>
        <h2>Move It Learn Ditangguhkan</h2>
        <div>
            <p>Kami dari Tim Move It dengan sedih mengumumkan bahwa Move It Learn ditangguhkan <b>atas keputusan Dewan Direksi AIDRAN untuk jangka waktu yang belum ditentukan.</b></p>
            <p>Kami mengucapkan terima kasih kepada semua pihak yang telah berkontribusi dalam pengembangan Move It Learn dan Proyek Move It. Permohonan maaf yang sebesar-besarnya kami sampaikan kepada siapa pun yang telah memberikan masukan demi menjadikan Move It Learn sebagai sarana yang lebih baik untuk pendidikan inklusi di Indonesia, serta kepada siapa pun yang saat ini sedang mengikuti salah satu kursus di platform ini.</p>
            <p>Hingga saat ini kami belum dapat memastikan kapan Move It Learn akan diaktifkan kembali.</p>
            
            <p>Terima kasih,</p>
            <p><b>Tim Move It</b></p>
        </div>
    </main>
    
    <?php wp_footer(); ?>
</body>
</html>