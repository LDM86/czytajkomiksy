<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Czytaj_Komiksy_Theme
 */

get_header();

if ( is_front_page() && is_home() & ! is_paged() ) :
	get_template_part( 'template-parts/header-hero' );
endif;
?>

	<main id="primary" class="site-main">
		 <section class="container">
			<div class="column column--left">
			<?php if ( is_front_page() && is_home() & ! is_paged() ) : ?>
			<h3 class="section-title"><span>Najnowsze w Czytaj Komiksy</span></h3>
			<?php endif; ?>
			<?php
			if ( have_posts() ) :

				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/loop', get_post_type() );

				endwhile;
				
				get_template_part( 'template-parts/pagination' );

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


<?php
get_sidebar();
get_footer();
