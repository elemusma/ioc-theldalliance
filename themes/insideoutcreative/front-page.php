<?php 
get_header();

if(get_the_content()){

    echo '<section class="pt-5 pb-5">';
    echo '<div class="container">';
    echo '<div class="row justify-content-center">';
    echo '<div class="col-lg-6 col-md-9">';
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
    endwhile; else:
    echo '<p>Sorry, no posts matched your criteria.</p>';
    endif;
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
    
    }

// start of map
if(have_rows('google_map')): while(have_rows('google_map')): the_row();
echo '<div class="position-relative pt-5 pb-5">';
echo '<div class="title position-absolute px-5 py-3 z-2 text-center" style="background:rgba(255,255,255,.85);border-radius:25px;top:25%;left:15%;">';
echo '<span class="h3 bold" style="color:#4A4AFE;">' . get_sub_field('title') . '</span>';
echo '</div>';
echo '<div class="content position-absolute px-5 py-3 z-2 col-lg-4 col-md-9" style="background:rgba(255,255,255,.85);border-radius:25px;top:45%;left:15%;">';
echo '<span class="h3" style="color:#32596F;">' . get_sub_field('content_area') . '</span>';
echo '</div>';

echo get_sub_field('map_area');
echo '</div>';
endwhile; endif;
// end of map

// start of resources
if(have_rows('resources')): while(have_rows('resources')): the_row();
$bgImg = get_sub_field('background_image');
$content = get_sub_field('content');

echo '<section class="position-relative text-white" style="padding:450px 0 50px;">';
echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;object-fit:cover;object-position:top;']);
echo '<div class="container">';
echo '<div class="row">';

echo '<div class="col-lg-6">';
echo $content;
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of resources

// start of intro
// if(have_rows('intro')): while(have_rows('intro')): the_row();
// echo '<section class="position-relative" style="padding:100px 0;">';
// echo '<div class="container">';
// echo '<div class="row align-items-center">';
//     echo '<div class="col-lg-6">';
//         echo get_sub_field('video');
//     echo '</div>';
//     echo '<div class="col-lg-6 pt-lg-0 pt-4">';
//         echo '<div class="h4">';
//         echo get_sub_field('content');
//         echo '</div>';
//     echo '</div>';
// echo '</div>';
// echo '</div>';
// echo '</section>';
// endwhile; endif;
// end of intro

// start of map
// if(have_rows('map')): while(have_rows('map')): the_row();

// echo '<section class="position-relative" style="padding:250px 0;">';
// $bgImg = get_sub_field('background_image');

// echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'w-100 h-100 position-absolute','style'=>'top:0;left:0;object-fit:cover;']);

// echo '<div class="container">';
// echo '<div class="row align-items-center">';
//     echo '<div class="col-lg-6">';
//         echo get_sub_field('content_left');
//     echo '</div>';

// if(have_rows('list_left')):
//     echo '<div class="col-lg-3 col-md-6">';
// while(have_rows('list_left')): the_row();
//         echo '<span class="h4 d-block"><strong>' . get_sub_field('text') . '</strong></span>';
// endwhile;
//     echo '</div>';
// endif;
// if(have_rows('list_right')):
//     echo '<div class="col-lg-3 col-md-6">';
// while(have_rows('list_right')): the_row();
// echo '<span class="h4 d-block"><strong>' . get_sub_field('text') . '</strong></span>';
// endwhile;
//     echo '</div>';
// endif;


// echo '</div>';
// echo '</div>';

// echo '</section>';
// endwhile; endif;
// end of map

// start of feed
// if(have_rows('hashtag')): while(have_rows('hashtag')): the_row();
// echo '<section class="position-relative bg-accent-tertiary text-white the-ld-alliance-feed" style="padding:100px 0;">';

// echo '<div class="container">';
//     echo '<div class="row">';
//         echo '<div class="col-md-6">';
//             echo get_sub_field('content');
//         echo '</div>';
//     echo '</div>';

//     if(have_rows('feed')): 
//         echo '<div class="row the-ld-alliance-feed-row">';
//         while(have_rows('feed')): the_row();
//         $image = get_sub_field('image');
//         $link = get_sub_field('link');
//         $link_url = $link['url'];
//         $link_title = $link['title'];
//         $link_target = $link['target'] ? $link['target'] : '_self';
//         $options = get_sub_field('options');

//             echo '<a href="' . $link_url . '" target="' . $link_target . '" class="col-lg-3 col-md-6 the-ld-alliance-feed-col overflow-h" style="height:300px;">';
//                 echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute w-100 h-100 the-ld-alliance-feed-img','style'=>'top:0;left:0;object-fit:cover;']);
//                 echo '<div class="position-absolute w-100 h-100 bg-accent-octonary the-ld-alliance-feed-overlay" style="top:0;left:0;"></div>';

//                 if($options == 'Facebook'){
//                     echo '<div class="position-absolute the-ld-alliance-feed-icon">';
//                      echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512"><path d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"/></svg>';
//                     echo '</div>';
//                 } elseif($options == 'Instagram'){
//                     echo '<div class="position-absolute the-ld-alliance-feed-icon">';
//                     echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>';
//                    echo '</div>';
//                 } elseif($options == 'Twitter'){
//                     echo '<div class="position-absolute the-ld-alliance-feed-icon">';
//                     echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>';
//                    echo '</div>';
//                 }

//             echo '</a>';
//         endwhile; 
//         echo '</div>';
//     endif;

// echo '</div>';

// echo '</section>';
// endwhile; endif;
// end of feed


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

get_footer(); 
?>