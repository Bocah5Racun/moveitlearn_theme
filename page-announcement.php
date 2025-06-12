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
            width: clamp(380px, 100%, 65ch);
        }
        
    </style>
</head>
<body>

    <main id="announcement-container">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </main>
    
    <?php wp_footer(); ?>
</body>
</html>