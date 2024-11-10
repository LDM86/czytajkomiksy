<?php

$post__sort = get_field('post__sort');
$post__numbers = get_field('post__numbers');

if ($post__sort === 'new') :
    $offset = false;
    $orderby = 'date';
elseif ($post__sort === 'rand') :
    $orderby = 'rand';
    $offset = 1;
endif;

?>
<div class="releated releated--widgets">

    <?php
    $releated = new WP_Query(
        array(
            'posts_per_page'   => $post__numbers,
            'post_type' => 'post',
            'post_status' => 'publish',
            'offset'=> $offset,
            'orderby' => $orderby
        )
    );

    if ($releated->have_posts()) :
        $new__post = array(); ?>
        <div class="releated__posts">
            <?php while ($releated->have_posts()) :
                $releated->the_post();
                $primary_term_id      = yoast_get_primary_term_id('category');
                $cat_color            = get_field('cat__color', 'term_' . $primary_term_id);

                $title__letters = get_the_title();

                if (strlen($title__letters) > 70) :
                    $font__size = ' b-post__title--longer';
                elseif (strlen($title__letters) > 40) :
                    $font__size = ' b-post__title--long';
                elseif (strlen($title__letters) > 20) :
                    $font__size = ' b-post__title--normal';
                endif;
            ?>
                <div class="b-post">

                    <div class="b-post__thumbnail" style="background:<?php echo $cat_color; ?>">
                        <a href="<?php echo get_permalink(); ?>"><img class="b-post__image" src="<?php the_post_thumbnail_url(); ?>"></a>
                    </div>
                    <div class="b-post__content">
                    <span class="categories categories--widgets"><?php czytajkomiksy_category(); ?></span>
                        <h2 class="b-post__title<?php echo wp_kses_post($font__size); ?>"><?php the_title(); ?></h2></a>
                    </div>
                    <div class="b-post__shadow"></div>
                    <a class="b-post__url" href="<?php echo get_permalink(); ?>"></a>
                </div>
            <?php
            endwhile; ?>
        </div>
    <?php endif;
    wp_reset_postdata();
    ?>

</div>