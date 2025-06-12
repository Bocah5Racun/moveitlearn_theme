<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        #announcement-container {
            width: clamp(380px, 100%, 65ch);
        }
    </style>
</head>
<body>

    <main id="announcement-container">
        <?php the_content(); ?>
    </main>
    
    <?php wp_footer(); ?>
</body>
</html>