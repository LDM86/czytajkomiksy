<?php

$cat__display = get_field('featured__display', 'option');
$cat__exclude = get_field('featured__exclude', 'option');

?>

<div class="featured featured--big">
	<div class="featured__border"></div>
	<?php

	$featured = new WP_Query(
		array(
			'posts_per_page'   => 1,
			'cat'              => $cat__display,
			'category__not_in' => $cat__exclude,
		)
	);

	if ($featured->have_posts()) :
		$new__post = array();

		while ($featured->have_posts()) :
			$featured->the_post();
			$new__post[]          = $post->ID;
			$GLOBALS['new__post'] = $new__post;
			$primary_term_id      = yoast_get_primary_term_id('category');
			$cat_color            = get_field('cat__color', 'term_' . $primary_term_id);
	?>
			<div class="b-post">
			<span class="categories categories--featured" style="display:flex; position: absolute; top: 0;"><?php czytajkomiksy_category(); ?></span>
				<div class="b-post__thumbnail" style="background:<?php echo $cat_color; ?>">
					<a href="<?php echo get_permalink(); ?>"><img class="b-post__image" src="<?php the_post_thumbnail_url(); ?>"></a>
				</div>
				<div class="b-post__content">
			
					
					<h2 class="b-post__title b-post__title--big"><?php the_title(); ?></h2></a>

				</div>
				<div class="b-post__shadow"></div>
				<a class="b-post__url" href="<?php echo get_permalink(); ?>"></a>
			</div>
	<?php
		endwhile; endif; wp_reset_postdata();
	?>

</div>