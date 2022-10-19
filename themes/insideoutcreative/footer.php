<?php
echo '<footer>';
echo '<section class="bg-accent-quinary position-relative" style="padding:100px 0;">';

// echo wp_get_attachment_image(106,'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;opacity:.15;object-fit:cover;']);

echo '<div class="container">';
echo '<div class="row justify-content-center">';

echo '<div class="col-12 text-center">';
wp_nav_menu(array(
'menu' => 'footer',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center text-white'
));

if(have_rows('header',2)): while(have_rows('header',2)): the_row();
    echo '<h2 class="text-white h1 bold">' . get_sub_field('hashtag') . '</h2>';
endwhile; endif;

echo get_template_part('partials/si');

echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
echo '<section class="bg-white s pt-4 pb-4">';

echo '<div class="container">';
echo '<div class="row justify-content-center align-items-center">';
echo '<div class="col-lg-7 small" style="color:var(--accent-septenary);">';

echo '<span class="pr-5 d-md-inline d-block">&copy; The LD Alliance</span><span class="pr-5 d-md-inline d-block"><a href="/accessibility/" class="text-accent-septenary">Accessibility</a></span><span class="pr-5 d-md-inline d-block"><a href="/accessibility/" class="text-accent-septenary">Privacy Policy</a></span><span class="pr-5 d-md-inline d-block">Site by <a href="/privacy-policy/" class="text-accent-septenary">Inside Out Creative</a></span>';

echo '</div>';
echo '<div class="col-lg-5 small d-flex align-items-center justify-content-lg-end text-lg-right" style="color:var(--accent-septenary);">';

echo '<span class="pr-3 bold h6 mb-0">POWERED BY</span>';
echo wp_get_attachment_image(246,'full','',['class'=>'h-auto','style'=>'width:125px;']);

echo '</div>';
echo '</div>';
echo '</div>';

echo '</section>';
echo '</footer>';

if(get_field('footer', 'options')) { the_field('footer', 'options'); } 
wp_footer();
echo '</body>';
echo '</html>';
?>