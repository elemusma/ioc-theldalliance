<?php
echo '<footer>';
echo '<section class="bg-accent-quinary position-relative" style="padding:100px 0;">';

echo wp_get_attachment_image(106,'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;opacity:.15;object-fit:cover;']);

echo '<div class="container">';
echo '<div class="row justify-content-center">';

echo '<div class="col-12 text-center">';
wp_nav_menu(array(
'menu' => 'footer',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center text-white'
));

if(have_rows('header')): while(have_rows('header')): the_row();
    echo '<h2 class="text-white h1 bold">' . get_sub_field('hashtag') . '</h2>';
endwhile; endif;

echo get_template_part('partials/si');

echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
echo '<section class="bg-accent-senary pt-4 pb-4">';

echo '<div class="container">';
echo '<div class="row justify-content-center align-items-center">';
echo '<div class="col-lg-7 small" style="color:var(--accent-septenary);">';

echo '<span class="pr-5 d-md-inline d-block">&copy; The LD Alliance</span><span class="pr-5 d-md-inline d-block"><a href="/accessibility/" class="text-accent-septenary">Accessibility</a></span><span class="pr-5 d-md-inline d-block"><a href="/accessibility/" class="text-accent-septenary">Privacy Policy</a></span><span class="pr-5 d-md-inline d-block">Site by <a href="/privacy-policy/" class="text-accent-septenary">Inside Out Creative</a></span>';

echo '</div>';
echo '<div class="col-lg-5 small d-flex align-items-center justify-content-lg-end text-lg-right" style="color:var(--accent-septenary);">';

echo '<span class="pr-3 bold h6 mb-0">POWERED BY</span><?xml version="1.0" encoding="UTF-8"?> <!-- Generator: Adobe Illustrator 24.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0) --> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 176.42 38.3" style="enable-background:new 0 0 176.42 38.3;width:150px;" xml:space="preserve" > <style type="text/css"> .st0{fill:#CBCA2C;} .st1{fill:#64BFEC;} .st2{fill:#23326A;} </style> <g> <g> <g> <path class="st0" d="M41.21,7.67h2.26c0.37,0,0.66-0.31,0.66-0.66V0.66c0-0.37-0.29-0.66-0.66-0.66H21.96 c0.37,0,0.66,0.29,0.66,0.66V7c0,0.37-0.29,0.66-0.66,0.66h9.74c0.37,0,0.62,0.29,0.62,0.66v5.21c0,0.37-0.29,0.66-0.66,0.66 H26.7c-0.37,0-0.66,0.29-0.66,0.66v8.58c0,0.37,0.29,0.68,0.66,0.68h4.98c0.37,0,0.66,0.29,0.66,0.66v5.21 c0,0.37-0.29,0.66-0.66,0.66h-9.71c0.37,0,0.66,0.29,0.66,0.66v6.33c0,0.37-0.29,0.66-0.66,0.66h21.52 c0.37,0,0.66-0.29,0.66-0.66V31.3c0-0.37-0.29-0.66-0.66-0.66h-2.26c-0.37,0-0.66-0.29-0.66-0.66V8.34 C40.55,7.96,40.85,7.67,41.21,7.67"></path> <path class="st1" d="M22.84,37.67v-6.33c0-0.37-0.29-0.66-0.66-0.66H11.9c-0.37,0-0.66-0.29-0.66-0.68v-5.21 c0-0.37,0.29-0.66,0.66-0.66h5.01c0.37,0,0.66-0.29,0.66-0.66v-8.56c0-0.37-0.29-0.66-0.66-0.66H11.9 c-0.37,0-0.66-0.29-0.66-0.66V8.37c0-0.37,0.29-0.66,0.66-0.66h10.28c0.37,0,0.66-0.29,0.66-0.66V0.66 c0-0.37-0.29-0.66-0.66-0.66H0c-0.37,0-0.66,0.29-0.66,0.66v6.33c0,0.37,0.29,0.66,0.66,0.66h2.28c0.37,0,0.66,0.29,0.66,0.66 v21.66c0,0.37-0.29,0.68-0.66,0.68H0c-0.37,0-0.66,0.29-0.66,0.66v6.33c0,0.37,0.29,0.66,0.66,0.66h22.16 C22.53,38.33,22.84,38.04,22.84,37.67"></path> </g> <g> <path class="st2" d="M176.42,28.66h-11.03V9.64h10.89v3.9h-5.92v3.59h4.88v3.76h-4.88v3.84h6.06V28.66z M164.05,9.64l-5.19,11.47 v7.55h-5.16v-7.43l-5.27-11.59h5.81l2.33,7.15l2.24-7.15C158.81,9.64,164.05,9.64,164.05,9.64z M147.38,28.66h-11.03V9.64h10.89 v3.9h-5.92v3.59h4.88v3.76h-4.88v3.84h6.06V28.66z M125.22,19.41c0-3.34-0.93-5.58-2.5-5.58c-1.46,0-2.41,2.24-2.41,5.19 c0,3.34,0.95,5.56,2.53,5.56C124.26,24.57,125.22,22.35,125.22,19.41z M130.49,18.93c0,5.41-2.38,9.76-8.11,9.76 c-5.25,0-7.41-4.18-7.41-9.34c0-5.41,2.38-9.74,8.11-9.74C128.33,9.61,130.49,13.77,130.49,18.93z M114,13.71h-3.79v14.95h-5.11 V13.71h-3.82V9.64h12.74v4.07C114.02,13.71,114,13.71,114,13.71z M95.56,28.66H84.54V9.64h10.89v3.9H89.5v3.59h4.88v3.76H89.5 v3.84h6.06V28.66z M83.53,9.64l-5.19,11.47v7.55h-5.16v-7.43L67.9,9.64h5.81l2.33,7.15l2.24-7.15 C78.28,9.64,83.53,9.64,83.53,9.64z M66.53,28.66H55.5V9.64h10.89v3.9h-5.92v3.59h4.88v3.76h-4.88v3.84h6.06 C66.53,24.73,66.53,28.66,66.53,28.66z"></path> </g> </g> </g> </svg> ';

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