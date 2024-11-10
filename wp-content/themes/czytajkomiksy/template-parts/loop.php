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
$primary_term_id = yoast_get_primary_term_id('category');
$cat_color = get_field('cat__color', 'term_'.$primary_term_id);

$image__id = get_post_thumbnail_id();
$image__src = wp_get_attachment_image_url( $image__id, 'normal' );
$image__srcset = wp_get_attachment_image_srcset( $image__id, 'full' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
    <div class="post__thumbnail thumbnail" style="background:<?php echo $cat_color; ?>">
        <a class="thumbnail__link" href="<?php echo get_permalink(); ?>">
            <img class="thumbnail__image" width="640" height="360" src="<?php echo the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
        </a>
    </div>
    <div class="post__content">
        <span class="categories categories--loop"><?php czytajkomiksy_category(); ?></span>
        <h1 class="post__title">
            <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        <?php

        if ('post' === get_post_type()) :
        ?>
            <div class="meta">

                <?php
                czytajkomiksy_posted_by(); ?>
                <br/>
                <?php czytajkomiksy_posted_on();

                ?>

            </div>
        <?php endif; ?>

        <?php
        the_excerpt();

        ?>
        <p class="more" >
            <a class="more__link" data-replace="Czytaj więcej" href="<?php echo get_permalink(); ?>"><span>Czytaj więcej</span></a>
        </p>
    </div>



</article>