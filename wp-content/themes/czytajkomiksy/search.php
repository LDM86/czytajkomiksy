<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Czytaj_Komiksy_Theme
 */

get_header();
?>
<?php if (have_posts()) : ?>
	<main id="primary" class="site-main">
		<section class="container container--wrap">
			<div class="column column--left">
				<h3 class="section-title"><span><?php printf(esc_html__('Wyniki wyszukiwania dla: %s', 'czytajkomiksy'), '<span>' . get_search_query() . '</span>'); ?></span></h3>
				<?php
				if (have_posts()) :

					while (have_posts()) :
						the_post();

						get_template_part('template-parts/loop', get_post_type());

					endwhile;

					get_template_part('template-parts/pagination');

				endif;
				?>
			</div>
			<div class="column column--right">
				<?php
				get_sidebar();
				?>
			</div>
		</section>
	</main>
<?php else : ?>
	<main id="primary" class="site-main">
		<section class="container container--wrap">
			<div class="column column--100">
				<h3 class="section-title"><span><?php printf(esc_html__('Wyniki wyszukiwania dla: %s', 'czytajkomiksy'), '<span>' . get_search_query() . '</span>'); ?></span></h3>
				<p class="no-result"><?php echo esc_html__('Przykro mi, ale nie znaleziono żadnych pasujących artykułów dla podanej frazy.', 'czytajkomiksy'); ?></p>
				<form role="search" name="main-search" method="get" class="search-form__form search-form__form--search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="text" class="search-form__input" name="s" placeholder="Czego szukasz?" value="<?php echo get_search_query(); ?>" />
					<button type="submit" class="button search-form__button">Szukaj</button>
				</form>
			<?php


			get_template_part('template-parts/search-posts', get_post_type()); ?>

		</section>
	</main>

<?php endif; ?>

<?php

get_footer();
