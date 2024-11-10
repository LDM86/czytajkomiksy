<?php

$title__letters = get_the_title();

if (strlen($title__letters) > 70) :
    $font__size = ' b-post__title--longer';
elseif (strlen($title__letters) > 40) :
    $font__size = ' b-post__title--long';
elseif (strlen($title__letters) > 20) :
    $font__size = ' b-post__title--normal';
endif;
