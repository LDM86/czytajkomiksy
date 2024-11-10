<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Czytaj_Komiksy_Theme
 */

$ep404__light = get_field('ep__image_light', 'option');
$ep404__dark = get_field('ep__image_dark', 'option');

$ep404__light_url = $ep404__light['url'];
$ep404__dark_url = $ep404__dark['url'];

$ep404__heading = get_field('ep__text', 'option');
$ep404__paragraph = get_field('ep__text_two', 'option');



get_header();

$random_post = new WP_Query(
	array(
	'posts_per_page' => 1,
    'orderby' => 'rand',
	'post_type' => 'post'
	)
);

if ($random_post->have_posts()) :
	while ($random_post->have_posts()) :
		$random_post->the_post();
		$random_post_url = get_the_permalink();
	endwhile;
endif; wp_reset_postdata();

?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<div class="single__container">
			<div class="single__content single__content--page404">
				<div class="error-404__image">
					<img id="p404-img" src="<?php echo esc_attr($ep404__light_url); ?>" alt="Bład 404 - Strony nie znaleziono">
				</div>
				<div class="error-404__content">
					<h3 class="error-404__heading"><?php echo wp_kses_post($ep404__heading); ?></h3>
					<p class="error-404__text"><?php echo wp_kses_post($ep404__paragraph); ?></p>
				</div>
				<div class="error-404__links">
					<a class="error-404__link" href="<?php echo esc_url(home_url('/')); ?>" rel="home">Wróć na stronę główną</a> lub <a class="error-404__link" href="<?php echo esc_attr($random_post_url); ?>">sprawdź losowy artykuł</a>. Może Ci się spodoba!
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
