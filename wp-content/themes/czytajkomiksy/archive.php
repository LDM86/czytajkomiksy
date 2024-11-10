<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Czytaj_Komiksy_Theme
 */

get_header();



get_template_part( 'template-parts/header-category', get_post_type() );
?>

		 <!-- <header class="page-header">
		 <?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header> -->
	<main id="primary" class="site-main">
	 	<section class="container">

			<div class="column column--left">
			<?php
			if ( have_posts() ) :

				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/loop', get_post_type() );

				endwhile;
				
				get_template_part( 'template-parts/pagination');

			endif;
			?>
					</div> 
					<div class="column column--right">
				<?php
get_sidebar(); ?>
</div>
	</section>
		</main>
<?php

get_footer();
