<?php get_header(); ?>
<style>
    .error404 section.hero {
    display: none;
}
</style>
<?php
$globalImg = get_field('global_placeholder_image','options');
echo '<section class="position-relative bg-attachment text-white sasdf" style="background:url('. $globalImg['url'] . ');background-size:cover;background-attachment:fixed;padding:150px 0;">';

echo wp_get_attachment_image(251,'full','',['class'=>'position-absolute','style'=>'top:0;right:0;']);

echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-md-12 pt-5 pb-5" style="">';
echo '<span class="d-inline-block bg-accent-quaternary h3 px-4 py-2">WELCOME</span>';
echo '<h1>A NEW MOVEMENT</h1>';
echo '<p class="h2">For Students Who Learn Differently</p>';
echo '<a href="' . home_url() . '" class="btn mt-5 mb-3 bg-accent text-white br-0 b-0">Go back home</a>';
// echo '<h2 class="mb-3" style="-webkit-text-stroke: 2px rgba(0, 0, 0, .5);">Or</h2>';
echo '<div class="col-md-6 pl-md-0">';
get_search_form();
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';

echo '<section class="position-relative bg-attachment text-white" style="background:url('. wp_get_attachment_image_url(155,'full') . ');background-size:cover;background-attachment:fixed;padding:150px 0;">';

echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-md-11 text-center pt-5 pb-5" style="">';

echo '<h2>MORE ABOUT THE MOVEMENT</h2>';
echo do_shortcode('[divider class="mt-4 mb-5 mx-auto"]');
echo '<p class="h2">The LD (Learn Different) Alliance is a student-led movement on a mission to eliminate the stigma of learning differences including specific Learning Disabilities as well as attention related challenges such as ADHD. Through a club-based model in high schools and colleges across the United States, the LD Alliance is working to empower, organize and mobilize students. The LD Alliance aims to transform the experience of learning differently by providing young adults with the resources, support, and leadership tools they need to build community, raise awareness, and engage in advocacy.</p>';
echo '<span class="h1 bold mt-4 mb-5 d-inline-block">#theNDalliance</span>';
echo get_template_part('partials/si');
// echo '<a href="' . home_url() . '" class="btn mt-5 mb-3 bg-accent text-white br-0 b-0">Go back home</a>';
// echo '<h2 class="mb-3" style="-webkit-text-stroke: 2px rgba(0, 0, 0, .5);">Or</h2>';
// echo '<div class="col-md-6 pl-md-0">';
// get_search_form();
// echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
get_footer();
?>