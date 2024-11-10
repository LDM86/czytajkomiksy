
<div class="releated releated--search">

	<?php
	$search_posts = new WP_Query(
		array(
			'posts_per_page'   => 6,
			'post_type' => 'post',
			'orderby' => 'rand',
			'post_status'=>'publish',
		)
	);

	if ($search_posts->have_posts()) : 	$new__post = array(); ?>
		<h3 class="releated__heading releated__heading--search"><?php echo _e('Mogą Cię zainteresować'); ?></h3>
		<div class="releated__posts">
			<?php while ($search_posts->have_posts()) :
				$search_posts->the_post();
				$primary_term_id      = yoast_get_primary_term_id('category');
				$cat_color            = get_field('cat__color', 'term_' . $primary_term_id);

				$title__letters = get_the_title();

                if (strlen($title__letters) > 70) :
                    $font__size = ' b-post__title--longer';
                elseif (strlen($title__letters) > 40) :
                    $font__size = ' b-post__title--long';
                elseif (strlen($title__letters) > 20) :
                    $font__size = ' b-post__title--normal';
                endif;
			?>
				<div class="b-post">
					<div class="b-post__thumbnail" <?php if($cat_color) : ?>style="background:<?php echo $cat_color; ?>"<?php endif;?>>
						<a href="<?php echo get_permalink(); ?>"><img class="b-post__image" src="<?php the_post_thumbnail_url($post->id); ?>"></a>
					</div>
					<div class="b-post__content">
						<span class="categories categories--search"><?php czytajkomiksy_category(); ?></span>
						<h2 class="b-post__title<?php echo wp_kses_post($font__size); ?>"><?php the_title(); ?></h2></a>
					</div>
					<div class="b-post__shadow"></div>
					<a class="b-post__url" href="<?php echo get_permalink(); ?>"></a>
				</div>
			<?php
			endwhile; ?>
		</div>

	<?php endif; wp_reset_postdata();
	?>

</div>