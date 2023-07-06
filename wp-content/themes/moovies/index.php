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
        <h2 class="text-center mb-4">Latest Reviews</h2>
        <div class="row">
			<?php
			$args = array(
				'post_type' => 'post', // Змініть 'post' на власний тип запису, якщо потрібно
				'posts_per_page' => 3 // Кількість записів для відображення
			);
			$query = new WP_Query($args);
			if ($query->have_posts()) :
				while ($query->have_posts()) :
					$query->the_post();
					?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
							<?php
							$image = get_field('photo');
							if ($image) {
								echo '<div class="card-img-top">' . wp_get_attachment_image($image, 'large') . '</div>';
							} else {
								echo '<div class="card-img-top"><img src="' . get_template_directory_uri() . '/img/placeholder.jpg" alt="Movie Poster" /></div>';
							}
							?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read Review</a>
                            </div>
                        </div>
                    </div>
				<?php
				endwhile;
				wp_reset_postdata();
			else :
				echo 'No posts found.';
			endif;
			?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
</body>
</html>
