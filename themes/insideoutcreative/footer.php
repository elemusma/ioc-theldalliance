<footer>
<section class="bg-accent pt-5">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-5 text-center pb-5">
<a href="<?php echo home_url(); ?>">
<?php $logo = get_field('logo','options'); $logoFooter = get_field('logo_footer','options'); 
if($logoFooter){
echo wp_get_attachment_image($logoFooter['id'],'full',"",['class'=>'w-100 h-auto']); 
} elseif($logo) {
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']);
}
?>
</a>
</div>
<div class="col-12">
<?php wp_nav_menu(array(
'menu' => 'footer',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center text-white text-uppercase'
)); ?>
</div>
<div class="col-12 text-center text-white">
<p class="mb-0">Phone: <a href="tel:+1<?php the_field('phone','options'); ?>" class="text-white"><?php the_field('phone','options'); ?></a> <span class="ml-3 mr-3">|</span> Address: <?php the_field('address','options'); ?> <span class="ml-3 mr-3">|</span> Email: <a href="mailto:<?php the_field('email','options'); ?>" target="_blank" class="text-white"><?php the_field('email','options'); ?></a>
<span>

</span> 
</p>
<?php echo get_template_part('partials/si'); ?>
<div class="text-gray-1 pt-4">
<?php the_field('website_message','options'); ?>
</div>
</div>
</div>
</div>
</section>
<div class="bg-gray text-center pt-3 pb-3 pl-5 pr-5">
    <div class="d-flex justify-content-center align-items-center">
        <p class="mb-0 text-white font-italic small"><a href="https://insideoutcreative.io/website-design/" target="_blank" rel="noopener noreferrer" style="" class="">Website Design</a> done by</p>
        <a href="https://insideoutcreative.io/" target="_blank" rel="noopener noreferrer" style="" class="">
        <?php echo wp_get_attachment_image(133,'large','',['class'=>'h-auto ml-2','style'=>'width:75px;']); ?>
        </a>
    </div>
</div>
</footer>
<?php if(get_field('footer', 'options')) { the_field('footer', 'options'); } ?>
<?php wp_footer(); ?>
</body>
</html>