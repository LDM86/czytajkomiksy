<?php
/**
 * The template for displaying header single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single
 *
 * @package Czytaj_Komiksy_Theme
 */

$thumbnail = get_the_post_thumbnail_url();
$title__letters = get_the_title();
$font__size = ' single__title--small';

if (strlen($title__letters) > 70) :
	$font__size = ' single__title--longer';
elseif (strlen($title__letters) > 40) :
	$font__size = ' single__title--long';
elseif (strlen($title__letters) > 20) :
	$font__size = ' single__title--normal';
endif;

if ('page' === get_post_type()) : 
	$class__header = ' single__header--page';
else :
	$class__header = '';	
endif;

?>
<header class="single__header<?php echo wp_kses_post($class__header);?>" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.7)), url('<?php echo $thumbnail; ?>');">
		<div class="single__container single__container--header">
		<span class="categories categories--loop"><?php czytajkomiksy_category(); ?></span>
			<h1 class="single__title<?php echo wp_kses_post($font__size); ?>"><?php the_title(); ?></h1>
			<?php

			if ('post' === get_post_type()) :
			?>
				<div class="meta">
					<?php
					czytajkomiksy_posted_on();
					echo '<br/>';
					czytajkomiksy_posted_by();
					?>
				</div>
			<?php endif; ?>
		</div>

	</header>