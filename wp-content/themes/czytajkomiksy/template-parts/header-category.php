<?php
/**

 */

$term = get_queried_object();
$image = get_field('cat__img', $term);
$image__url = $image['url'];

if ($image) : 
  $header__class = " archive-page__header--image"; 
  else :
    $header__class = ""; 
  endif;
?>

<header class="archive-page__header<?php echo wp_kses_post($header__class); ?>" <?php if ($image) : ?>style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.6)), url('<?php echo $image__url; ?>');" <?php endif; ?>>
    <div class="archive-page__container">
        <h1 class="archive-page__title"><?php the_archive_title(); ?></h1>
        <?php the_archive_description('<div class="archive-page__description">', '</div>');?>
    </div>
</header>