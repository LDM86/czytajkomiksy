<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Czytaj_Komiksy_Theme
 */

get_header();

?>


	
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/header-content', get_post_type() );

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; 
		?>



<?php

get_footer();
