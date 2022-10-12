<?php 
/**
 * Template Name: About
 */
get_header(); 

if(have_rows('about')): while(have_rows('about')): the_row();

if(have_rows('sections')): 
    
    
    while(have_rows('sections')): the_row();
    
    $layout = get_sub_field('layout');
    
    if($layout == 'Content plus columns'){
        if(have_rows('content_plus_columns')): while(have_rows('content_plus_columns')): the_row();
        echo '<section class="pt-5 pb-5">';
    echo '<div class="container">';
        echo '<div class="row pb-5">';
            echo '<div class="col-12 text-center pb-5">';
            echo get_sub_field('content');
            echo '</div>';

        if(have_rows('columns')): 
            while(have_rows('columns')): the_row();

            echo '<div class="col-md-4 text-center">';
            echo '<h2 class="text-accent-septenary bold" style="text-shadow:6px 6px 0 rgba(32,42,45,.08);font-size:4.16158em;">' . get_sub_field('title') . '</h2>';
            echo get_sub_field('content');
            echo '</div>';

            endwhile; 
        endif;
        echo '</div>';
        echo '</div>';
        echo '</section>';

        endwhile; endif;

    } elseif($layout == 'Image/Video plus content'){

        if(have_rows('imagevideo_plus_content')): while(have_rows('imagevideo_plus_content')): the_row();
        $side = get_sub_field('side');

        echo '<section class="pt-5 pb-5">';
        echo '<div class="container">';
        
        if($side == 'Left'){
            echo '<div class="row row-left flex-md-row-reverse pb-5">';
        } elseif ($side == 'Right'){
            echo '<div class="row row-right pb-5">';
            // echo '</div>';
        }

        echo '<div class="col-md-6 pb-md-0 pb-4">';
        if(get_sub_field('image_or_video') == 'Image'){
            $image = get_sub_field('image');
            echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 h-100','style'=>'']);
        } elseif(get_sub_field('image_or_video') == 'Video'){
            echo get_sub_field('video');
        }
        echo '</div>';

        echo '<div class="col-md-6">';
        echo get_sub_field('content');
        echo '</div>';


        echo '</div>';
        echo '</div>';
echo '</section>';

    endwhile; endif;

    } elseif($layout == 'Two columns'){

    if(have_rows('two_columns')): while(have_rows('two_columns')): the_row();
        echo '<section class="bg-accent-tertiary text-white" style="padding:100px 0;">';
        echo '<div class="container">';
        echo '<div class="row text-center">';

        if(have_rows('column_left')): while(have_rows('column_left')): the_row();
        $bgImg = get_sub_field('background_image');
        echo '<div class="col-lg-6">';
        echo '<div class="position-relative h-100 d-flex align-items-center justify-content-center" style="padding:100px 0;">';
            echo wp_get_attachment_image($bgImg,'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;object-fit:cover;']);
            echo '<div class="position-relative">';
            echo get_sub_field('content');
            echo '</div>';

            echo '<div class="position-absolute w-100 h-100" style="top:0;left:0;border:1px solid #eaeaea;transform:rotate(3deg) translate(0px, 11px);pointer-events:none;"></div>';
        echo '</div>';
        echo '</div>';
        endwhile; endif;
        
        if(have_rows('column_right')): while(have_rows('column_right')): the_row();
        $bgImg = get_sub_field('background_image');
        echo '<div class="col-lg-6">';
        echo '<div class="position-relative h-100 d-flex align-items-center justify-content-center" style="padding:100px 0;">';
            echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;object-fit:cover;']);
            echo '<div class="position-relative">';
            echo get_sub_field('content');
            echo '</div>';

            echo '<div class="position-absolute w-100 h-100" style="top:0;left:0;border:1px solid #eaeaea;transform:rotate(3deg) translate(0px, 11px);pointer-events:none;"></div>';
        echo '</div>';
        echo '</div>';
        endwhile; endif;

        echo '</div>';
        echo '</div>';
        echo '</section>';
    endwhile; endif;
    } elseif($layout == 'Two columns'){
        if(have_rows('lists')): while(have_rows('lists')): the_row();

        if(have_rows('list_item')): while(have_rows('list_item')): the_row();
        echo '<section class="" style="padding:100px 0;">';
        echo '<div class="container">';
        echo '<div class="row text-center">';

        echo '<div class="col-lg-9">';
        echo get_sub_field('content');
        echo '</div>';

        $link = get_field('link');
        if( $link ): 
            echo '<div class="col-lg-3">';
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
                echo do_shortcode('[button href="' . esc_url( $link_url ) . '" style="" target="_blank" class="btn-main mt-4" target="' . esc_attr( $link_target ) . '"]' . esc_html( $link_title ) . '[/button]');
            echo '</div>';
        endif;

        echo '</div>';
        echo '</div>';
        echo '</section>';

        endwhile; endif;

        endwhile; endif;
        
    }
    
endwhile; 


endif;

endwhile; endif;

get_footer(); ?>