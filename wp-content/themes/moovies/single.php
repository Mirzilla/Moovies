<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <title>Movie Reviews</title>
    <?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>
<main class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php
                    $image = get_field('photo');
                    if ($image) {
                        echo '<img src="' . wp_get_attachment_image_url($image, 'large') . '" class="img-fluid mb-4" alt="' . get_the_title() . '" />';
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/img/placeholder.jpg" class="img-fluid mb-4" alt="Movie Poster" />';
                    }
                    ?>
                <?php endwhile; endif; ?>
            </div>
            <div class="col-lg-6">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h2 class="mb-4"><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
</body>
</html>
