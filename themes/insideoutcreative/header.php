<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

if(get_field('header', 'options')) { the_field('header', 'options'); }

if(get_field('custom_css')) { 
?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php } ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if(get_field('body','options')) { the_field('body','options'); } ?>
<div class="blank-space"></div>
<header class="position-relative pt-3 pb-3 z-3 box-shadow bg-white w-100" style="top:0;left:0;">

<div class="nav">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-1 col-md-3 col-4">
<a href="<?php echo home_url(); ?>">
<?php 
$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']); 
}
?>
</a>
</div>
<div class="col-6 mobile-hidden">
<?php
    wp_nav_menu(array(
        'menu' => 'primary',
        'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
    ));
?>
</div>
<div class="col-lg-4 col-6 desktop-hidden">
<a id="navToggle" class="nav-toggle">
<div>
<div class="line-1 bg-accent-quinary"></div>
<div class="line-2 bg-accent-quinary"></div>
<div class="line-3 bg-accent-quinary"></div>
</div>
</a>
</div>

<div id="navMenuOverlay" class="position-fixed z-2"></div>
<div class="col-md-9 nav-items bg-white desktop-hidden" id="navItems">

<div class="pt-5 pb-5">
<div class="close-menu">
<div>
<span id="navMenuClose" class="close h1">X</span>
</div>
</div>
<a href="<?php echo home_url(); ?>">
<?php 
$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
}
?>
</a>
</div>
<?php wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
)); ?>
</div>
</div>
</div>
</div>

</header>
<?php
echo '<section class="hero position-relative" style="padding:350px 0 50px;">';
$globalPlaceholderImg = get_field('global_placeholder_image','options');
if(is_page()){
if(has_post_thumbnail()){
the_post_thumbnail('full', array('class' => 'w-100 h-100 bg-img position-absolute'));
} else {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
}
} else {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
}


if(is_front_page()) {
echo '<div class="position-relative text-white text-center" style="">';

echo '<div class="position-absolute mobile-hidden" style="top:25%;right:25px;">';
echo get_template_part('partials/si-vertical');

if(have_rows('header')): while(have_rows('header')): the_row();
    echo '<h2 style="transform:rotate(90deg) translate(0px, -75%);transform-origin:left;width:0;">' . get_sub_field('hashtag') . '</h2>';
endwhile; endif;

echo '</div>';

echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12">';
echo '<h1 class="pt-3 pb-3 mb-0 bold" style="font-size:4.5rem;">' . get_the_title() . '</h1>';

if(have_rows('header')): while(have_rows('header')): the_row();

echo '<div class="m-auto">';
echo '<div class="divider" style="margin:10px auto 25px;"></div>';
echo '</div>';

echo '<h2>' . get_sub_field('subtitle') . '</h2>';

echo '<div class="mobile-hidden" style="height:250px;"></div>';

endwhile; endif;

echo '<div class="position-relative desktop-hidden" style="margin-top:50px;margin-bottom:250px;">';
echo get_template_part('partials/si-vertical');

if(have_rows('header')): while(have_rows('header')): the_row();
    echo '<h2 style="transform:rotate(90deg) translate(0px, -75%);transform-origin:left;width:0;">' . get_sub_field('hashtag') . '</h2>';
endwhile; endif;

echo '</div>';

if(have_rows('header')): while(have_rows('header')): the_row();

// start register bar
echo '<div class="register-bar d-md-inline-flex align-items-center pr-4 pl-4 pt-3 pb-3 bg-gray text-left" style="border-radius:50px;background:#202a2d;">';

echo '<div class="register-bar-icon pr-3">';
echo get_sub_field('icon');
echo '</div>';

echo '<div class="register-bar-text pr-3">';
echo '<p style="" class="mb-0 text-lg-center text-left"><strong>' . get_sub_field('field_label') . '</strong></p>';
echo '</div>';

echo '<div class="register-bar-button">';

$link = get_sub_field('link');
if( $link ): 
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
echo '<a class="btn-main ml-lg-0 ml-md-5 ml-0 mt-md-0 mt-4" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '" style="border-radius:25px;box-shadow:none;white-space:nowrap;">' . esc_html( $link_title ) . '</a>';
endif;

echo '</div>';

echo '</div>';
// end register bar

endwhile; endif;

echo '</div>';
echo '</div>';
echo '</div>';


echo '</div>';
}



if(!is_front_page()) {
echo '<div class="container pt-5 pb-5 text-white text-center">';
echo '<div class="row">';
echo '<div class="col-md-12">';
if(is_page() || !is_front_page()){
echo '<h1 class="">' . get_the_title() . '</h1>';
} elseif(is_single()){
echo '<h1 class="">' . get_single_post_title() . '</h1>';
} elseif(is_author()){
echo '<h1 class="">Author: ' . get_the_author() . '</h1>';
} elseif(is_tag()){
echo '<h1 class="">' . get_single_tag_title() . '</h1>';
} elseif(is_category()){
echo '<h1 class="">' . get_single_cat_title() . '</h1>';
} elseif(is_archive()){
echo '<h1 class="">' . get_archive_title() . '</h1>';
}
echo '</div>';
echo '</div>';
echo '</div>';
}

echo '</section>';
?>