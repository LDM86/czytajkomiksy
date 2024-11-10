<?php

$post1 = $GLOBALS['new__post'];
$post2 = $GLOBALS['new__post2'];
$post3 = $GLOBALS['new__post3'];

$exclude__posts = array_merge($post1, $post2, $post3);

?>


<div class="featured featured--new-post">
	<?php

	$cat__display = get_field('post__display', 'option');
	$cat__exclude = get_field('post__exclude', 'option');

	$featured = new WP_Query(
		array(
			'posts_per_page'   => 1,
			'cat'              => $cat__display,
			'category__not_in' => $cat__exclude,
			'post__not_in'     => $exclude__posts,
		)
	);

	if ($featured->have_posts()) :
		while ($featured->have_posts()) :
			$featured->the_post();
			$primary_term_id = yoast_get_primary_term_id('category');
			$cat_color       = get_field('cat__color', 'term_' . $primary_term_id);

			global $font__size;
			require __DIR__ . '/title-size.php';
	?>
			<div class="b-post">
			<span class="categories categories--featured"><?php czytajkomiksy_category(); ?></span>
				<div class="b-post__thumbnail" style="background:<?php echo $cat_color; ?>">
					<a href="<?php echo get_permalink(); ?>"><img class="b-post__image" src="<?php the_post_thumbnail_url(); ?>"></a>
				</div>
				<div class="b-post__content">
				
					<h2 class="b-post__title<?php echo wp_kses_post($font__size); ?>"><?php the_title(); ?></h2></a>
				</div>
				<div class="b-post__shadow"></div>
				<a class="b-post__url" href="<?php echo get_permalink(); ?>"></a>
			</div>
	<?php
		endwhile;
	endif;
	wp_reset_postdata();
	?>



	<?php

	$cat__display = get_field('post__display_two', 'option');
	$cat__exclude = get_field('post__exclude_two', 'option');

	$featured = new WP_Query(
		array(
			'posts_per_page'   => 1,
			'cat'              => $cat__display,
			'category__not_in' => $cat__exclude,
			'post__not_in'     => $exclude__posts,
		)
	);

	if ($featured->have_posts()) :
		while ($featured->have_posts()) :
			$featured->the_post();
			$primary_term_id = yoast_get_primary_term_id('category');
			$cat_color       = get_field('cat__color', 'term_' . $primary_term_id);

			global $font__size;
			require __DIR__ . '/title-size.php';
	?>
			<div class="b-post">
			<span class="categories categories--featured"><?php czytajkomiksy_category(); ?></span>
				<div class="b-post__thumbnail" style="background:<?php echo $cat_color; ?>">
					<a href="<?php echo get_permalink(); ?>"><img class="b-post__image" src="<?php the_post_thumbnail_url(); ?>"></a>
				</div>
				<div class="b-post__content">
					
					<h2 class="b-post__title<?php echo wp_kses_post($font__size); ?>"><?php the_title(); ?></h2></a>
				</div>
				<div class="b-post__shadow"></div>
				<a class="b-post__url" href="<?php echo get_permalink(); ?>"></a>
			</div>
	<?php
		endwhile;
	endif;
	wp_reset_postdata();
	?>


	<?php

	$cat__display = get_field('post__display_three', 'option');
	$cat__exclude = get_field('post__exclude_three', 'option');

	$featured = new WP_Query(
		array(
			'posts_per_page'   => 1,
			'cat'              => $cat__display,
			'category__not_in' => $cat__exclude,
			'post__not_in'     => $exclude__posts,
		)
	);

	if ($featured->have_posts()) :
		while ($featured->have_posts()) :
			$featured->the_post();
			$primary_term_id = yoast_get_primary_term_id('category');
			$cat_color       = get_field('cat__color', 'term_' . $primary_term_id);

			global $font__size;
			require __DIR__ . '/title-size.php';
	?>
			<div class="b-post">
			<span class="categories categories--featured"><?php czytajkomiksy_category(); ?></span>
				<div class="b-post__thumbnail" style="background:<?php echo $cat_color; ?>">
					<a href="<?php echo get_permalink(); ?>"><img class="b-post__image" src="<?php the_post_thumbnail_url(); ?>"></a>
				</div>
				<div class="b-post__content">
					
					<h2 class="b-post__title<?php echo wp_kses_post($font__size); ?>"><?php the_title(); ?></h2></a>
				</div>
				<div class="b-post__shadow"></div>
				<a class="b-post__url" href="<?php echo get_permalink(); ?>"></a>
			</div>
	<?php
		endwhile;
	endif;
	wp_reset_postdata();
	?>

</div>