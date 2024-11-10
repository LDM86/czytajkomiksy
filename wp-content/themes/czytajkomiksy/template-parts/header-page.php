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

if ('page' === get_post_type()) : 
	$class__header = ' single__header--page';
else :
	$class__header = '';	
endif;

?>
<header class="single__header single__header--page" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.7)), url('<?php echo $thumbnail; ?>');">
		<div class="single__container single__container--header">
			<h1 class="single__title single__title--page"><?php the_title(); ?></h1>
		</div>
	</header>
