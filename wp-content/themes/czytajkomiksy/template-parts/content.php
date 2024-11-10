<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Czytaj_Komiksy_Theme
 */



if (is_active_sidebar('sidebar-1')) {
	$sidebar = " single__content--sidebar";
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="single__container">
		<div class="single__content<?php /* echo wp_kses_post($sidebar); */ ?>">
			<?php
			the_content(
				sprintf(
					wp_kses(
						__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'czytajkomiksy'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);



			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'czytajkomiksy'),
					'after'  => '</div>',
				)
			);
			?>
		</div>

		<?php get_template_part('template-parts/footer-content', get_post_type()); ?> 

		<div class="comments">
			<h2 class="comments__heading">Co myslisz? Daj znać w komentarzu!</h2>
			<?php



			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;
			?>
		</div>

	</div>

</article>