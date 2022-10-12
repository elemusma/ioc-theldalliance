<?php get_header();
global $post; 
if ( ! post_password_required( $post ) ) {

if(get_the_content()){

echo '<section class="pt-5 pb-5">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-lg-9">';
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
            $columnsCounter=0;
            while(have_rows('columns')): the_row();
            $columnsCounter++;

            // echo $columnsCounter;

            // if($columnsCounter<=2){
                // echo '<div class="col-md-6 text-center">';
                // echo '</div>';
            // } elseif($columnsCounter>=3) {
                echo '<div class="col-md-4 text-center ' . get_sub_field('classes') . '">';
            // }
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
            echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 h-100','style'=>'object-fit: cover;']);
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
        echo '<div class="row text-center justify-content-center">';

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
    } elseif($layout == 'Lists'){
        if(have_rows('lists')): while(have_rows('lists')): the_row();

        if(have_rows('list_item')): while(have_rows('list_item')): the_row();
        echo '<section class="" style="padding:100px 0;border-bottom:2px solid var(--accent-primary);">';
        echo '<div class="container">';
        echo '<div class="row">';

        echo '<div class="col-lg-10">';
        echo get_sub_field('content');
        echo '</div>';

        $link = get_sub_field('link');
        if( $link ): 
            echo '<div class="col-lg-2 text-right">';
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
                echo do_shortcode('[button href="' . esc_url( $link_url ) . '" style="" target="_blank" class="btn-main mt-4 text-left" target="' . esc_attr( $link_target ) . '"]' . esc_html( $link_title ) . '[/button]');
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

if(get_field('show_instagram_feed') == "Yes"):
// start of feed
if(have_rows('hashtag',2)): while(have_rows('hashtag',2)): the_row();
echo '<section class="position-relative bg-accent-tertiary text-white the-ld-alliance-feed" style="padding:100px 0;">';

echo '<div class="container">';
    echo '<div class="row">';
        echo '<div class="col-md-6">';
            echo get_sub_field('content');
        echo '</div>';
    echo '</div>';

    if(have_rows('feed')): 
        echo '<div class="row the-ld-alliance-feed-row">';
        while(have_rows('feed')): the_row();
        $image = get_sub_field('image');
        $link = get_sub_field('link');
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        $options = get_sub_field('options');

            echo '<a href="' . $link_url . '" target="' . $link_target . '" class="col-lg-3 col-md-6 the-ld-alliance-feed-col overflow-h" style="height:300px;">';
                echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute w-100 h-100 the-ld-alliance-feed-img','style'=>'top:0;left:0;object-fit:cover;']);
                echo '<div class="position-absolute w-100 h-100 bg-accent-octonary the-ld-alliance-feed-overlay" style="top:0;left:0;"></div>';

                if($options == 'Facebook'){
                    echo '<div class="position-absolute the-ld-alliance-feed-icon">';
                     echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512"><path d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"/></svg>';
                    echo '</div>';
                } elseif($options == 'Instagram'){
                    echo '<div class="position-absolute the-ld-alliance-feed-icon">';
                    echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>';
                   echo '</div>';
                } elseif($options == 'Twitter'){
                    echo '<div class="position-absolute the-ld-alliance-feed-icon">';
                    echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>';
                   echo '</div>';
                }

            echo '</a>';
        endwhile; 
        echo '</div>';
    endif;

echo '</div>';

echo '</section>';
endwhile; endif;
// end of feed
endif;

} else {
// we will show password form here

echo '<section class="pt-5 pb-5">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-md-12">';
echo get_the_password_form();
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
   
}

get_footer(); 
?>