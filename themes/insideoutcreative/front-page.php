<?php 
get_header();

// start of intro
if(have_rows('intro')): while(have_rows('intro')): the_row();
echo '<section class="position-relative" style="padding:100px 0;">';
echo '<div class="container">';
echo '<div class="row align-items-center">';
    echo '<div class="col-md-6">';
        echo get_sub_field('video');
    echo '</div>';
    echo '<div class="col-md-6">';
        echo '<div class="h4">';
        echo get_sub_field('content');
        echo '</div>';
    echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of intro

// start of map
if(have_rows('map')): while(have_rows('map')): the_row();

echo '<section class="position-relative" style="padding:250px 0;">';
$bgImg = get_sub_field('background_image');

echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'w-100 h-100 position-absolute','style'=>'top:0;left:0;object-fit:cover;']);

echo '<div class="container">';
echo '<div class="row align-items-center">';
    echo '<div class="col-md-6">';
        echo get_sub_field('content_left');
    echo '</div>';
echo '</div>';
echo '</div>';

echo '</section>';
endwhile; endif;
// end of map


// how to use new image hover effect
// echo '<div class="col-6 col-intro-gallery col mb-1 p-1 overflow-h">';
// echo '<div class="position-relative img-hover w-100">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'object-fit:cover;']);
// echo '</a>';
// echo '</div>';
// echo '</div>';

// popup trigger
// echo '<span class="btn bg-white text-accent apply-now open-modal" id="apply-now" style="">Apply Now</span>';

// popup content
// echo '<div class="modal-content apply-now position-fixed w-100 h-100 z-3">';
// echo '<div class="bg-overlay"></div>';
// echo '<div class="bg-content">';
// echo '<div class="bg-content-inner">';
// echo '<div class="close" id="">X</div>';
// echo '<div>';
// echo get_field('popup_content');
// echo '</div>';
// echo '</div>';

// echo '</div>';
// echo '</div>';

get_footer(); ?>